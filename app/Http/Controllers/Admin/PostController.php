<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Jobs\SendCouponEmailJob;
use App\Jobs\SendPostMailJob;
use App\Mail\SendPostMail;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Subscribe;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts = Post::query()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create(){
        $postcates = PostCategory::where('status', 1)->get();
        return view('admin.post.create', compact('postcates'));
    }

    public function store(PostRequest $request){
        $data = $request->except('_token', 'thumbnail');
        $data['slug'] = Str::slug($request->title);
        if($request->thumbnail){
            $image = upload_image('thumbnail');
            if($image['code'] == 1)
                $data['thumbnail'] = $image['name'];
        }
        $data['created_at'] = Carbon::now();
        Post::insertGetId($data);
        return redirect()->back();
    }

    public function edit($id){
        $post = Post::find($id);
        $postcates = PostCategory::all();
        return view('admin.post.update', compact('post', 'postcates'));
    }

    public function update(PostRequest $request, $id){
        $post = Post::find($id);
        $data = $request->except('_token', 'thumbnail');
        $data['slug'] = Str::slug($request->title);
        if($request->thumbnail){
            $image = upload_image('thumbnail');
            if($image['code'] == 1)
                $data['thumbnail'] = $image['name'];
        }
        $data['updated_at'] = Carbon::now();
        $post->update($data);
        return redirect()->back();
    }

    public function active($id){
        $post = Post::find($id);
        $post->status = ! $post->status;
        $post->save();
        return redirect()->back();
    }

    public function trash(){
        $posts = Post::where('status',0)->get();
        $count_post = count($posts);
        return view('admin.post.trash', compact('posts','count_post'));
    }

    public function delete($id){
        $post = Post::find($id);
        if($post) $post->delete();
        return redirect()->back();
    }

    public function sendMail(Request $request)
    {
        $post = Post::query()
            ->where('id', $request->id)->first();
        if($post->status == 0){
            return response()->json([
                'status' => 0,
                'message' =>'Mã giảm giá đang bị ẩn'
            ]);
        }

        $time_now = Carbon::now();
//        if($coupon->start_time > $time_now || $time_now > $coupon->end_time){
//            return response()->json([
//                'status' => 0,
//                'message' =>'Mã giảm giá đã hết thời gian sử dụng'
//            ]);
//        }

//        $users = $this->adminController->get_email_user_subscribe();

        $adminController = new AdminController();
        $users = $adminController->get_email_user_subscribe();
        SendPostMailJob::dispatch($post, $users);

        if ($post->send_mail == 0) {
            $post->send_mail = 1;
            $post->save();
        }
    }


}

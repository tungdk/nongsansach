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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts = Post::query()->orderBy('created_at', 'desc')->get();
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
            $data['thumbnail'] = upload_image('posts', $request->thumbnail);
        }
        $data['status'] = $request->status ?? 0;
        $data['created_at'] = Carbon::now();
        Post::query()->insertGetId($data);
        Session::flash('toastr',[
            'type'  =>  'success',
            'message' => 'Thêm mới thành công'
        ]);
        return back();
    }

    public function edit($id){
        $post = Post::find($id);
        $postcates = PostCategory::all();
        return view('admin.post.update', compact('post', 'postcates'));
    }

    public function update(PostRequest $request, $id){
        $post = Post::query()->findOrFail($id);
        $data = $request->except('_token', 'thumbnail');
        $data['slug'] = Str::slug($request->title);
        if($request->thumbnail){
            $data['thumbnail'] = upload_image('posts', $request->thumbnail);
        }
        $data['updated_at'] = Carbon::now();
        $post->update($data);
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Cập nhật bài viết thành công'
        ]);
        return redirect()->back();
    }

    public function active($id){
        $post = Post::query()->findOrFail($id);
        $post->status = ! $post->status;
        $post->save();
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Cập nhật bài viết thành công'
        ]);
        return redirect()->back();
    }

    public function trash(){
        $posts = Post::query()->where('status',0)->get();
        $count_post = count($posts);
        return view('admin.post.trash', compact('posts','count_post'));
    }

    public function delete($id){
        $post = Post::query()->findOrFail($id);
        if($post) $post->delete();
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Xoá bài viết thành công'
        ]);
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

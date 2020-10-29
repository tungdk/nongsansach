<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Post;
use App\Models\PostCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts = Post::where('status',1)->sortByDesc('created_at')->get();
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
}

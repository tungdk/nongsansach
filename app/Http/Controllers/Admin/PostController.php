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
        $posts = Post::all();
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
}

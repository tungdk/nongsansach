<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostCategoryRequest;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    public function index(){
        $postcates = PostCategory::all();
        return view('admin.post_category.index', compact('postcates'));
    }
    public function create(){
        return view('admin.post_category.create');
    }
    public function store(PostCategoryRequest $request){
        $postcate = new PostCategory();
        $postcate->name = $request->name;
        $postcate->slug = Str::slug($request->name);
        $postcate->save();
        return redirect()->back();
    }
}

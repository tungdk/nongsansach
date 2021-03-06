<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostCategoryRequest;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostCategoryController extends Controller
{
    public function index(){
        $postcates = PostCategory::query()->orderByDesc('created_at')->get();
        return view('admin.post_category.index', compact('postcates'));
    }
    public function create(){
        return view('admin.post_category.create');
    }
    public function store(PostCategoryRequest $request){
        $postcate = new PostCategory();
        $postcate->name = $request->name;
        $postcate->slug = Str::slug($request->name);
        $postcate->status = $request->status ?? 0;

        $postcate->save();
        Session::flash('toastr',[
            'type'  =>  'success',
            'message' => 'Thêm mới thành công'
        ]);
        return back();
    }

    public function edit($id){
        $postcate = PostCategory::find($id);
        return view('admin.post_category.update', compact('postcate'));
    }

    public function update(PostCategoryRequest $request, $id){
        $postcate = PostCategory::find($id);
        $postcate->name = $request->name;
        $postcate->slug = Str::slug($request->name);
        $postcate->save();
        Session::flash('toastr',[
            'type'  =>  'success',
            'message' => 'Cập nhật thành công'
        ]);
        return redirect()->back();
    }

    public function active($id){
        $postcate = PostCategory::find($id);
        $postcate->status = ! $postcate->status;
        $postcate->save();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\RequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::query()
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'status', 'created_at']);
        $data = [
            'categories' => $categories
        ];
        return view('admin.category.index', $data);
    }

    public function create(){
        return view('admin.category.create');
    }


    public function store(CategoryRequest $request){
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status = 1;
        $success = $category->save();
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Thêm danh mục thành công'
            ]);
        }
        return redirect()->back();
    }

    public function edit($id){
        $category = Category::query()->findOrFail($id, ['id', 'name']);
        return view('admin.category.update', compact('category'));
    }
    public function update(Request $request, $id){
        $category = Category::query()->findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $success = $category->save();
        if($success){
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Cập nhật danh mục thành công'
            ]);
        }
        return redirect()->back();
    }

    public function active($id){
        $category = Category::query()->findOrFail($id);
        $category->status = ! $category->status;
        $category->save();
        return redirect()->back();
    }
}

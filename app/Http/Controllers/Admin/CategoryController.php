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

    function getAll(){
        return Category::query()
            ->where('is_deleted', 0)
            ->orWhere('is_deleted', null)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'status', 'created_at']);
    }

    public function load_data(){
        $categories = $this->getAll();
        return response()->json([
            'view' => view('admin.category.data', [
                'categories' => $categories
            ])->render()
        ]);
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
            return response()->json([
                'status' => true
            ], 200);
        }
        return response()->json([
            'status' => false
        ], 400);
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

    public function active(Request $request){
        $id = $request->id;
        $category = Category::query()->findOrFail($id);
        $category->status = ! $category->status;
        $category->save();

        $categories = $this->getAll();
        return response()->json([
            'view' => view('admin.category.data', [
                'categories' => $categories
            ])->render()
        ]);
    }

    public function delete(Request $request){
        $id = $request->id;
        $category = Category::query()->findOrFail($id);
        $category->is_deleted = 1;
        $category->save();

        $categories = $this->getAll();
        return response()->json([
            'view' => view('admin.category.data', [
                'categories' => $categories
            ])->render()
        ]);
    }
}

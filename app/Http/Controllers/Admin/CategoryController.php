<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
//        $categories = DB::table('categories')->paginate(1);
        $categories = Category::all()->sortByDesc('created_at');
        $data = [
            'categories' => $categories
        ];
        return view('admin.category.index', $data);
    }

    public function create(){
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.category.create', compact('htmlOption'));
    }

    public function getCategory($parentId){
        $data = Category::all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function store(RequestCategory $request){
        $category = new Category();
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
        $category->slug = Str::slug($request->name);
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
        $category = Category::find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.category.update', compact('category','htmlOption'));
    }
    public function update(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->parent_id = $request->parent_id;
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
        $category = Category::find($id);
        $category->status = ! $category->status;
        $category->save();
        return redirect()->back();
    }
}

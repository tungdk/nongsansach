<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RequestCategory;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category){
        $this->category = $category;
    }

    public function index(){
//        $categories = DB::table('categories')->paginate(1);
        $categories = Category::all();
        $data = [
            'categories' => $categories
        ];
        return view('admin.category.index', $data);
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(RequestCategory $request){
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->name);
        $id = Category::insertGetId($data);
//        return redirect()->back();
        return redirect()->route('admin.category.index');
    }
}

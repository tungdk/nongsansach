<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        $viewData = [
            'products' => $products
        ];
        return view('admin.product.index', $viewData);
    }

    public function create(){
        $htmlOption = $this->getCategory($parentId = '');
        $units = Unit::all();
        return view('admin.product.create', compact('htmlOption', 'units'));
    }
    public function getCategory($parentId){
        $data = Category::all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }

    public function store(ProductRequest $request){
//        $product = new Product();
//        $product->name = $request->name;
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->name);
        Product::insertGetId($data);
        return redirect()->back();

    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('admin.product.update', compact('product'));
    }
    public function update(){

    }
}

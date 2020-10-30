<?php

namespace App\Http\Controllers\Admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        if(request()->type === 'active'){
            $products = Product::where('status', 1)->where('quantity', '>', 10)->paginate(10)->sortByDesc('created_at');
        }
        elseif(request()->type === 'soldout'){
            $products = Product::where('quantity', '<=', 10)->paginate(10)->sortByDesc('created_at');
        }
        elseif(request()->type === 'unlisted'){
            $products = Product::where('status', 0)->paginate(10)->sortByDesc('created_at');
        }
        else{
            $products = Product::paginate(10)->sortByDesc('created_at');
        }
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
        $data = $request->except('_token', 'avatar');
        $data['slug'] = Str::slug($request->name);
        if($request->avatar){
            $image = upload_image('avatar');
            if($image['code'] == 1)
                $data['avatar'] = $image['name'];
        }
        Product::insertGetId($data);
        return redirect()->back();

    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $units=Unit::all();
        return view('admin.product.update', compact('product', 'categories', 'units'));
    }
    public function update(ProductRequest $request, $id){
        $product = Product::find($id);
        $data = $request->except('_token', 'avatar');
        $data['slug'] = Str::slug($request->name);
        $data['updated_at'] = Carbon::now();
        if($request->avatar){
            $image = upload_image('avatar');
            if($image['code'] == 1)
                $data['avatar'] = $image['name'];
        }
        $product->update($data);

        return redirect()->back();
    }
    public function active($id){
        $product = Product::find($id);
        $product->status = ! $product->status;
        $product->save();
        return redirect()->back();
    }
    public function hot($id){
        $product = Product::find($id);
        $product->hot = ! $product->hot;
        $product->save();
        return redirect()->back();
    }
}

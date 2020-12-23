<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends SiteController
{
    public function index(){
        return view('site.category.index');
    }
    public function detail($id, $slug){
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $category = Category::query()->where('status', 1)->findOrFail($id);
        $products = Product::query()->where('category_id', $id)->where('status', 1)->orderByDesc('created_at')->get();
        $data = [
            'recent_products' => $recent_products,
            'category' => $category,
            'products' => $products
        ];
        if($category->slug == $slug){
            return view('site.category.detail', $data);
        }
        else{
            return redirect()->route('site.category.detail',[$category->id, $category->slug]);
        }
    }
}

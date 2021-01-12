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
        $category = Category::query()->where('status', 1)->findOrFail($id);
        $products = Product::query()
            ->where('category_id', $id)
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->paginate(12, ['id', 'name', 'slug', 'avatar', 'price_new', 'price_old']);
        $data = [
            'recent_products' => $this->five_new_product(),
            'category' => $category,
            'five_post_best_views' => $this->five_hot_news(),
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

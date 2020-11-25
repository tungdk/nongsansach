<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail_product($id, $slug)
    {
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $product = Product::query()->findOrFail($id);
        $data = [
            'recent_products' => $recent_products,
            'product' => $product
        ];
        if($product->slug == $slug){
            return view('site.product.detail', $data);
        }
        else{
            return redirect()->route('site.product.detail',[$product->id, $product->slug]);
        }
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function detail_product($id, $slug)
    {
        Product::find($id)->increment('views');
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $product = Product::query()->select('products.*', DB::raw('(price_old - price_new)/price_old * 100 as percent'))->findOrFail($id);
        $count_comments = Comment::query()->where('product_id', $id)->where('status', 1)->orderByDesc('created_at')->count();
        $data = [
            'recent_products' => $recent_products,
            'product' => $product,
            'count_comments' => $count_comments
        ];
        if($product->slug == $slug){
            return view('site.product.detail', $data);
        }
        else{
            return redirect()->route('site.product.detail',[$product->id, $product->slug]);
        }
    }
}

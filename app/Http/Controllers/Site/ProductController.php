<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends SiteController
{
    public function detail_product($id, $slug)
    {
        Product::query()->findOrFail($id)->increment('views');
        $product = Product::query()
            ->select('products.*', DB::raw('(price_old - price_new)/price_old * 100 as percent'))
            ->findOrFail($id);
        $count_comments = Comment::query()
            ->where('product_id', $id)->where('status', 1)
            ->orderByDesc('created_at')
            ->count();
        $relate_products = Product::query()
            ->where('status', 1)
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->orderByDesc('created_at')
            ->limit(10)
            ->get(['id', 'name', 'slug', 'avatar', 'price_new', 'price_old']);
        $data = [
            'recent_products' => $this->five_new_product(),
            'product' => $product,
            'count_comments' => $count_comments,
            'relate_products' => $relate_products,
            'five_post_best_views' => $this->five_hot_news(),
        ];
        if($product->slug == $slug){
            return view('site.product.detail', $data);
        }
        else{
            return redirect()->route('site.product.detail',[$product->id, $product->slug]);
        }
    }
}

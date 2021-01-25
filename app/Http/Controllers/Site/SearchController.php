<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends SiteController
{
    public function index(Request $request){
        $products = Product::query()
            ->where([
                ['name', 'like', '%'.$request->tukhoa.'%'],
                ['status', 1]
            ])
            ->get(['id', 'name', 'slug', 'price_new', 'avatar', 'price_old']);

        $posts = Post::query()
            ->where([
                ['title', 'like', '%'.$request->tukhoa.'%'],
                ['status', 1]
            ])
            ->get(['id', 'title', 'slug', 'thumbnail']);

        $viewData = [
            'products' => $products,
            'posts' => $posts,
            'recent_products' => $this->five_new_product(),
            'key_word' => $request->tukhoa
        ];
        return view('site.search.index', $viewData);
    }
}

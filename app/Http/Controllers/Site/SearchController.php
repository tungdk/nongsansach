<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends SiteController
{
    public function index(Request $request){
        $recent_products = Product::query()->where('status', 1)->orderByDesc('updated_at')->limit(5)->get();
        $products = Product::query()
            ->where([
                ['name', 'like', '%'.$request->tukhoa.'%'],
                ['status', 1]
            ])
            ->get(['id', 'name', 'slug', 'price_new']);
        return view('site.search.index', compact('products', 'recent_products'));
    }
}

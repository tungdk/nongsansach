<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends SiteController
{
    public function index()
    {
        $categories = Category::all();
        $recent_products = Product::query()->where('status', 1)->orderByDesc('created_at')->limit(8)->get();
        $data = [
            'recent_products' => $recent_products,
            'categories' => $categories
        ];
        return view('site.home.index', $data);
    }


}

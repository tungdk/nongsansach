<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends SiteController
{
    public function index()
    {
        $categories_random = Category::query()->where('status', 1)->inRandomOrder()->limit(3)->get();
        $recent_products = Product::query()->where('status', 1)->orderByDesc('created_at')->limit(8)->get();
        $sliders = Slider::query()->where('status', 1)->orderByDesc('created_at')->get();
        $data = [
            'recent_products' => $recent_products,
            'categories_random' => $categories_random,
            'sliders' => $sliders
        ];
        return view('site.home.index', $data);
    }


}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends SiteController
{
    public function index()
    {
        $categories_random = Category::query()->where('status', 1)->inRandomOrder()->limit(3)->get();
        $products_cate = [];
        foreach ($categories_random as $cate) {
            $products_cate[$cate->name] = [
                'id' => $cate->id,
                'slug' => $cate->slug,
                'products' => Product::query()->where('status', 1)->orderByDesc('created_at')->where('category_id', $cate->id)->limit(4)->get(),
            ];
        }
        $recent_products = Product::query()->where('status', 1)->orderByDesc('created_at')->limit(8)->get();
        $sliders = Slider::query()->where('status', 1)->orderByDesc('created_at')->get();
        $partners = Partner::query()->where('status', 1)->orderByDesc('created_at')->get();
        $posts = Post::query()->where('status', 1)->orderByDesc('updated_at')->limit(8)->get();

        $data = [
            'recent_products' => $recent_products,
            'categories_random' => $categories_random,
            'sliders' => $sliders,
            'partner' => $partners,
            'products_cate' => $products_cate,
            'posts' => $posts
        ];
        return view('site.home.index', $data);
    }


}

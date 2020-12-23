<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
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
        //sản phẩm theo danh mục
        $categories_random = Category::query()->where('status', 1)->inRandomOrder()->limit(3)->get();
        $products_cate = [];
        foreach ($categories_random as $cate) {
            $products_cate[$cate->name] = [
                'id' => $cate->id,
                'slug' => $cate->slug,
                'products' => Product::query()
                    ->where([
                        ['status', 1],
                        ['category_id', $cate->id],
                        ['quantity', '>', 0]
                    ])
                    ->orderByDesc('created_at')
                    ->limit(4)
                    ->get(['id', 'name', 'price_old', 'price_new', 'slug', 'avatar'])
            ];
        }

        //sản phẩm gần đây
        $recent_products = Product::query()
            ->where([
                ['status', 1],
                ['quantity', '>', 0]
            ])
            ->orderByDesc('created_at')
            ->limit(8)
            ->get(['id', 'name', 'price_old', 'price_new', 'slug', 'avatar']);

        //sản phẩm nổi bật
        $hot_products = Product::query()
            ->where([
                ['status', 1],
                ['quantity', '>', 0],
                ['hot', 1]
            ])
            ->orderByDesc('created_at')
            ->limit(8)
            ->get(['id', 'name', 'price_old', 'price_new', 'slug', 'avatar']);

        //slider trang chủ
        $sliders = Slider::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get(['id', 'title', 'description', 'thumbnail']);

        //Đối tác
        $partners = Partner::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get('logo');

        //Bài viết
        $posts = Post::query()
            ->where('status', 1)
            ->orderByDesc('updated_at')
            ->limit(8)
            ->get(['id', 'title', 'slug', 'thumbnail']);

        //Lấy ra các bình luận

        $comments = Comment::query()
            ->where([
                ['status', 1],
                ['show_home', 1]
            ])
            ->orderByDesc('created_at')
            ->get(['id', 'content', 'user_id']);
        //dữ liệu cần show
        $viewData = [
            'recent_products' => $recent_products,
            'categories_random' => $categories_random,
            'sliders' => $sliders,
            'partner' => $partners,
            'products_cate' => $products_cate,
            'posts' => $posts,
            'hot_products' => $hot_products,
            'comments' => $comments
        ];
        return view('site.home.index', $viewData);
    }


}

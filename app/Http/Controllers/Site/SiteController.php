<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SubscribeRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Policy;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class SiteController extends Controller
{
    public function __construct()
    {
        //lấy danh mục
        $getCategories = [];
        $categories = Category::query()
            ->where('status', 1)
            ->where('is_deleted', 0)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'slug']);
        foreach ($categories as $category){
            if(isset($category->products) && $category->products->count() > 0){
                array_push($getCategories, $category);
            }
        }

        //lấy danh sách chính sách
        $policies = Policy::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'slug']);

        //Lấy thông tin website
        $setting = Setting::query()
            ->first(['id', 'name', 'phone', 'email', 'address', 'map', 'time_work', 'fanpage', 'slogan']);

        View::share([
            'categories' => $getCategories,
            'policies' => $policies,
            'setting' => $setting
        ]);
    }

    public function five_new_product(){
        return Product::query()
            ->where('status', 1)
            ->orderByDesc('updated_at')
            ->limit(5)
            ->get();
    }

    public function five_hot_news(){
        return Post::query()
            ->where('status', 1)
            ->orderByDesc('views')
            ->take(5)
            ->get(['id', 'title', 'slug', 'thumbnail', 'views', 'updated_at']);
    }

    public function post_category(){
        return PostCategory::query()->where('status', 1)->get(['id', 'name', 'slug']);
    }

    function count_cart()
    {
        $user_id = Auth::id();
        $count_cart = Cart::query()->where('user_id', $user_id)->count();
        return $count_cart;
    }

    public function subscribe(SubscribeRequest $request)
    {
        $email = $request->email;
        $findEmail = Subscribe::query()->where('email', $email)->first();
        if (!$findEmail) {
            $newSubscribe = new Subscribe();
            $newSubscribe->email = $email;
            $newSubscribe->save();
        }
        return response()->json([
            'status' => true,
            'message' => 'Đăng kí thành công'
        ]);
    }

}

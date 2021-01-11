<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SubscribeRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Policy;
use App\Models\Setting;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class SiteController extends Controller
{
    public function __construct()
    {
        //lấy danh mục
        $categories = Category::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'slug']);

        //lấy danh sách chính sách
        $policies = Policy::query()
            ->where('status', 1)
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'slug']);

        //Lấy thông tin website
        $setting = Setting::query()
            ->first(['id', 'name', 'phone', 'email', 'address', 'map', 'time_work', 'fanpage', 'slogan']);

        View::share([
            'categories' => $categories,
            'policies' => $policies,
            'setting' => $setting
        ]);
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

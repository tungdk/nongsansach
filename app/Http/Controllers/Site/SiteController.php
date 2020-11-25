<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function __construct()
    {
//        if(
//            Auth::guard('web')->check() ||
//            Auth::guard('admins')->check()
//        ){
//            $user_id = Auth::id();
//            $count_cart = Cart::query()->where('user_id', $user_id)->count();
//            die($count_cart);
//            View::share('count_cart', $count_cart);
//        }
//        else{
//            echo "chưa đăng nhập";
//            var_dump(Auth::guard('web')->check(), Auth::guard('admins')->check(), Auth::check());
//        }
    }
}

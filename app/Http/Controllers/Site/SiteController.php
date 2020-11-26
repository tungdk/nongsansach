<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function __construct()
    {
        if(Auth::check()){
            $user_id = Auth::id();
            dd('ahihi' . $user_id);
            die();
            $count_cart = Cart::query()->where('user_id', $user_id)->count();
            dd($count_cart);
            View::share('count_cart', $count_cart);
        }
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\SubscribeRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;


class SiteController extends Controller
{
    public function __construct()
    {
        $categories = Category::query()->where('status', 1)->orderByDesc('created_at')->get();

        View::share('categories', $categories);
//        if ($this->middleware('auth:web')) {
////            $this->middleware(function () {
//                $user_id = Auth::id();
//                $count_cart = Cart::query()->where('user_id', $user_id)->count();
////                dd($count_cart);
//                \view()->share('count_cart', $count_cart);
////                View::share('count_cart', $count_cart);
////            });
//        }
        $this->share_count_cart();
    }

    function share_count_cart(){
//        dd(Auth::id());
    }
    public function test(){
        return view('errors.404');
    }

    public function subscribe(SubscribeRequest $request){
        $email = $request->email;
        $findEmail = Subscribe::query()->where('email', $email)->first();
        if(!$findEmail){
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

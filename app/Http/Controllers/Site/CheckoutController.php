<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $id = Auth::id();
        $user = User::query()->findOrFail($id);
        $carts = Cart::query()->where('user_id', $id)->get();
        $data = [
            'user' => $user,
            'carts' => $carts
        ];
        return view('site.checkout.index', $data);
    }
}

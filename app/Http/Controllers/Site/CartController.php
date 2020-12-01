<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CartController extends SiteController
{
    public function index(){
        $user_id = Auth::id();
        $carts = Cart::query()->where('user_id', $user_id)->get();
        return view('site.cart.index', compact('carts'));
    }

    public function add($id, $quantity){
        if (!Auth::check()) {
            return response()->json([
                'success' => false,
                'message' => 'Bạn cần đăng nhập để mua hàng'
            ]);
        }
        //lay ra san pham muon them vao gio hang

        $product = Product::query()->findOrFail($id);
        if (!$product || $product->status == 0) {
            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm không tồn tại'
            ]);
        }
        if ($product->quantity == 0) {
            return response()->json([
                'success' => false,
                'message' => 'Sản phẩm tạm thời hết hàng'
            ]);
        }
        $user_id = Auth::id();
        $cart_product = Cart::query()->where('user_id', $user_id)->where('product_id', $id)->first();
        if($cart_product){
            $cart_product->quantity = $cart_product->quantity + $quantity;
            $cart_product->save();
            return response()->json([
                'success' => true,
                'message' => 'Thành công'
            ]);
        }

        $cart = new Cart();
        $cart->user_id = $user_id;
        $cart->product_id = $id;
        $cart->quantity = $quantity;
        $cart->save();
        return response()->json([
            'success' => true,
            'message' => 'Thành công'
        ]);
    }

    public function update(Request $request){
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        $user_id = Auth::id();
        $cart = Cart::query()
            ->where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();
        if($cart){
            $cart->quantity = $quantity;
            $cart->save();
            return response()->json([
                'status' => true,
                'message' => 'Cập nhật thành công'
            ]);
        }
        else{
            return response()->json([
               'status' => false,
               'message' => 'Sản phẩm không tồn tại trong giỏ hàng'
            ]);
        }
    }

    public function delete(Request $request){
        $product_id = $request->product_id;
        $user_id = Auth::id();
        $cart = Cart::query()
            ->where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();
        if($cart){
            $cart->delete();
            return response()->json([
                'status' => true,
                'message' => 'Xoá thành công'
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'Sản phẩm không tồn tại trong giỏ hàng'
            ]);
        }
    }
}

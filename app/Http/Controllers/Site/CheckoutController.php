<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Jobs\SendOrderJob;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends SiteController
{
    public function index()
    {
        $id = Auth::id();
        $user = User::query()->findOrFail($id);
        $carts = DB::table('carts')
            ->leftJoin('products', 'carts.product_id', '=', 'products.id')
            ->select('products.quantity as product_quantity', 'carts.product_id', 'products.avatar', 'products.name', 'products.price_new',
                'carts.quantity', DB::raw('products.price_new * carts.quantity as TongTien'))
            ->where('user_id', $id)
            ->orderByDesc('carts.created_at')->get();
        foreach ($carts as $cart) {
            if ($cart->quantity > $cart->product_quantity) {
                return redirect()->route('site.cart.index')->with('error', 'Số lượng sản phẩm '. $cart->name .' không đủ.');
            }
        }
        if (count($carts) == 0) {
            return redirect()->route('site.cart.index');
        }
//        $total = Cart::query()->select(SUM( 'carts.quantity' * 'product.price' ) AS 'thanhtien' )->get();
        $total = DB::table('carts')
            ->leftJoin('products', 'products.id', '=', 'carts.product_id')
            ->where('carts.user_id', $id)
            ->select(DB::raw('SUM(carts.quantity * products.price_new) AS thanhtien'))
            ->get();
        $data = [
            'user' => $user,
            'carts' => $carts,
            'total' => $total
        ];
        return view('site.checkout.index', $data);
    }

    public function check_coupon(Request $request)
    {
        $coupon = $request->coupon;
        $get_coupon = Coupon::query()
            ->where('code', $coupon)
            ->first();
        if (!$get_coupon) {
            return response()->json([
                'status' => false,
                'message' => 'Mã giảm giá không tồn tại'
            ]);
        }
        if ($get_coupon->count == 0) {
            return response()->json([
                'status' => false,
                'message' => 'Mã giảm giá đã hết lượt sử dụng'
            ]);
        }
        $time_now = Carbon::now();
        if ($time_now < $get_coupon->start_time || $time_now > $get_coupon->end_time) {
            return response()->json([
                'status' => false,
                'message' => 'Mã giảm giá đã quá hạn sử dụng'
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => 'Mã giảm giá hợp lệ',
            'sale' => $get_coupon->sale,
            'id' => $get_coupon->id
        ]);
    }

    public function check_out(CheckoutRequest $request)
    {
        $user_id = Auth::id();
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $note = $request->note;
        $payment_method = $request->payment_method;
        //check coupon
        if ($request->coupon_id) {
            $coupon_id = $request->coupon_id;
            $time_now = Carbon::now();
            $coupon = Coupon::query()
                ->where('id', $coupon_id)
                ->where('count', '>', 0)
                ->where('start_time', '<', $time_now)
                ->where('end_time', '>', $time_now)
                ->first();
            if (!$coupon) {
                return response()->json([
                    'status' => false,
                    'message' => 'Mã giảm giá không hợp lệ'
                ]);
            }
            $coupon_sale = $coupon->sale;
        }

        //tính tổng tiền
        $carts = DB::table('carts')
            ->leftJoin('products', 'carts.product_id', '=', 'products.id')
            ->select('products.quantity as product_quantity', 'carts.product_id', 'products.avatar', 'products.name', 'products.price_new',
                'carts.quantity', DB::raw('products.price_new * carts.quantity as thanhtien'))
            ->where('user_id', $user_id)
            ->orderByDesc('carts.created_at')->get();

        $total_money = 0;
        foreach ($carts as $cart){
            $total_money = $total_money + $cart->thanhtien;
        }
        if(isset($coupon_sale)){
            $money_sale = ($coupon_sale * $total_money)/100;
            $total_money = $total_money - $money_sale;
        }

        $data = [
            'user_id' => $user_id,
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'note' => $note,
            'payment_method' => $payment_method,
            'total_money' => $total_money,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'sale' => $money_sale ?? 0
        ];
        $orderID = Order::query()->insertGetId($data);
        if ($orderID) {
            foreach ($carts as $cart) {
                if ($cart->quantity > $cart->product_quantity) {
                    return response()->json([
                        'status' => false,
                        'message' => 'Số lượng sản phẩm không đủ',
                    ]);
                }
            }
            try {
                foreach ($carts as $cart) {
                    $order_detail = new Order_detail();
                    $order_detail->order_id = $orderID;
                    $order_detail->product_id = $cart->product_id;
                    $order_detail->name = $cart->name;
                    $order_detail->quantity = $cart->quantity;
                    $order_detail->price = $cart->price_new;
                    $order_detail->image = $cart->avatar;
                    $order_detail->save();

                    //trừ đi số lượng bên bảng sản phẩm
                    $quantity_product = Product::query()->where([
                        ['status', 1],
                        ['id', $cart->product_id]
                    ])->first();
                    $quantity_product->quantity = $quantity_product->quantity - $cart->quantity;
                    $quantity_product->save();
                }
            } catch (\Exception $e) {
                Order::destroy($orderID);
                return response()->json([
                    'status' => false,
                    'message' => 'Đặt hàng không thành công',
                ]);
            }

            Cart::query()->where('user_id', $user_id)->delete();

            //Gửi mail
            $user = User::query()->where([
                ['active', 1],
                ['id', $user_id]
            ])->first();
            $order = Order::query()->find($orderID);
            $order_details = Order_detail::query()->select('*', DB::raw('price * quantity as thanhtien'))->where('order_id', $orderID)->get();
            SendOrderJob::dispatch($user->email, $order, $order_details);
            $setting = Setting::query()->first();
            return response()->json([
                'status' => true,
                'message' => 'Đặt hàng thành công',
                'view' => view('site.checkout.checkout_success',[
                    'order' => $order,
                    'order_details' => $order_details,
                    'setting' => $setting
                ])->render()
            ]);
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::query()->orderByDesc('created_at')->paginate(10);
        $viewData = [
          'orders' => $orders
        ];
        return view('admin.order.index', $viewData);
    }

    public function view_order(Request $request){
        $order_id = $request->order_id;
        $order = Order::query()->findOrFail($order_id);
        $order_detail = Order_detail::query()->where('order_id', $order_id);
        return response()->json([
           'view' => view('admin.order.view_order',[
                'order' => $order,
                'order_detail' => $order_detail
           ])->render()
        ]);

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $orders = Order::query()->whereRaw(1);
        if($request->id) $orders->where('id', $request->id);
        if($phone = $request->phone) $orders->where('phone', $phone);
        if($status = $request->status) $orders->where('status', $status);
        $orders = $orders->orderByDesc('created_at')->paginate(10);
        $viewData = [
            'orders' => $orders
        ];
        return view('admin.order.index', $viewData);
    }

    public function view_order(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::query()->find($order_id);
        if (!$order) {
            return response()->json([
                'status' => false,
                'message' => 'Đơn hàng không tồn tại'
            ]);
        }
        $order_detail = Order_detail::query()->select('*', DB::raw('price * quantity as thanhtien'))->where('order_id', $order_id)->get();
        return response()->json([
            'status' => true,
            'view' => view('admin.order.view_order', [
                'order' => $order,
                'order_detail' => $order_detail
            ])->render()
        ]);
    }

    public function getAction($action, $order_id){
        $order = Order::query()->findOrFail($order_id);
        if($order){
            switch ($action){
                case 'confirm':
                    $order->status = 2;
                    break;
                case 'transport':
                    $order->status = 3;
                    break;
                case 'delivered':
                    $order->status = 4;
                    break;
                case 'cancel':
                    $order->status = 0;
                    break;
                default:
                    break;
            }
            $order->save();
        }
        return redirect()->back();
    }
}

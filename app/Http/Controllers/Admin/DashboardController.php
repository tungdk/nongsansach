<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        //tổng số đơn hàng
        $totalOrders = Order::query()->select('id')->count();

        //tổng thành viên
        $totalUser = User::query()->select('id')->count();

        //tổng sản phẩm
        $totalProduct = Product::query()->select('id')->count();

        //tổng đánh giá
        $totalComment = Comment::query()->select('id')->count();

        //danh sách đơn hàng mới
        $orders = Order::query()->where('status', 1)->orderByDesc('created_at')->get();

        //sản phẩm xem nhiều
        $topViewProduct = Product::query()->orderByDesc('views')->limit(5)->get();

        //sản phẩm bán chạy
        $topBuyedProduct = Product::query()->orderByDesc('buyed')->limit(5)->get();

        $viewData = [
            'totalOrders' => $totalOrders,
            'totalUser' => $totalUser,
            'totalProduct' => $totalProduct,
            'totalComment' => $totalComment,
            'orders' => $orders,
            'topViewProduct' => $topViewProduct,
            'topBuyedProduct' => $topBuyedProduct
        ];
        return view('admin.dashboard.index', $viewData);
    }
}

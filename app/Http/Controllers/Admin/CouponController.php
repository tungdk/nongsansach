<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CouponRequest;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function index(){
        $coupons = Coupon::all();
        return view('admin.coupon.index', compact('coupons'));
    }

    public function create(){
        return view('admin.coupon.create');
    }

    public function store(CouponRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        Coupon::insertGetId($data);
        return redirect()->back();
    }

}

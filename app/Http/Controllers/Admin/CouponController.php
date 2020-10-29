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
        $coupons = Coupon::all()->sortByDesc('created_at');
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

    public function edit($id){
        $coupon = Coupon::find($id);
        return view('admin.coupon.update', compact('coupon'));

    }

    public function update(CouponRequest $request, $id){
        $coupon = Coupon::find($id);
        $data = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        $coupon->update($data);
        return redirect()->back();
    }

    public function active($id){
        $coupon = Coupon::find($id);
        $coupon->status = ! $coupon->status;
        $coupon->save();
        return redirect()->back();
    }
}

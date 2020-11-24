<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CouponRequest;
use App\Jobs\SendCouponEmailJob;
use App\Mail\CouponNotification;
use App\Models\Coupon;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function index()
    {
        $coupons = Coupon::query()->orderByDesc('created_at')->paginate(10);
        return view('admin.coupon.index', compact('coupons'));
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(CouponRequest $request)
    {
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        $data['send_mail'] = 0;
        Coupon::insertGetId($data);
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Thêm mới dữ liệu thành công'
        ]);
        return redirect()->back();
    }

    public function edit($id)
    {
        $coupon = Coupon::find($id);
        return view('admin.coupon.update', compact('coupon'));
    }

    public function update(CouponRequest $request, $id)
    {
        $coupon = Coupon::find($id);
        $data = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        $coupon->update($data);
        Session::flash('toastr', [
            'type' => 'success',
            'message' => 'Cập nhật thành công'
        ]);
        return redirect()->back();
    }

    public function active($id)
    {
        $coupon = Coupon::find($id);
        $coupon->status = !$coupon->status;
        $coupon->save();
        return redirect()->back();
    }

    public function sendMail($id)
    {
        $coupon = Coupon::query()->findOrFail($id);
        $users = User::query()->where('active', 1)->get();
        SendCouponEmailJob::dispatch($coupon, $users)->onQueue('emails');

        if ($coupon->send_mail == 0) {
            $coupon->send_mail = 1;
            $coupon->save();
        }
    }
}

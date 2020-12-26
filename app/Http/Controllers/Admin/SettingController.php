<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Http\Requests\Admin\SettingSocialRequest;
use App\Http\Requests\Admin\SettingWebsiteRequest;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::query()->first();
        return view('admin.setting.index', compact('setting'));
    }

    public function update(SettingRequest $request){
        $setting = Setting::query()->first();
        $setting->name = $request->name;
        $setting->phone = $request->phone;
        $setting->email = $request->email;
        $setting->address = $request->address;
        $setting->map = $request->map;
        $setting->time_work = $request->time_work;
        $setting->fanpage = $request->fanpage;
        $setting->slogan = $request->slogan;
        $setting->about_us = $request->about_us;
        $setting->save();

        return response()->json(['message'=>'Thành công'], 200);

    }
}

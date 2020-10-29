<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingRequest;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $settings = Setting::all()->sortByDesc('created_at');
        return view('admin.setting.index', compact('settings'));
    }

    public function create(){
        return view('admin.setting.create');
    }

    public function store(SettingRequest $request){
        $data = $request->except('_token');
        $data['created_at'] = Carbon::now();
        Setting::insertGetId($data);

        return redirect()->back();
    }

    public function edit($id){
        $setting = Setting::find($id);
        return view('admin.setting.update', compact('setting'));
    }

    public function update(SettingRequest $request, $id){
        $setting = Setting::find($id);
        $data = $request->except('_token');
        $data['updated_at'] = Carbon::now();
        $setting->update($data);

        return redirect()->back();
    }

    public function active($id){
        $setting = Setting::find($id);
        $setting->status = ! $setting->status;
        $setting->save();
        return redirect()->back();
    }
}

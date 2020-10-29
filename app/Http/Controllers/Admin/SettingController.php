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
        $settings = Setting::all();
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
}

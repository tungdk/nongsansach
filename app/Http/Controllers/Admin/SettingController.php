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
    public function website(){
        $name = Setting::where('config_key', '=', 'name')->first();
        $description = Setting::where('config_key', '=', 'description')->first();
        $logo = Setting::where('config_key', '=', 'logo')->first();
        $favicon = Setting::where('config_key', '=', 'favicon')->first();
        $data = [
            'name' => $name,
            'description' => $description,
            'logo' => $logo,
            'favicon' => $favicon
        ];
        return view('admin.setting.index2', $data);
    }

    public function update_website(SettingWebsiteRequest $request){
        $name = Setting::where('config_key','=','name')->first();
        $name->config_value = $request->name;
        $name->save();

        $description = Setting::where('config_key','=','description')->first();
        $description->config_value = $request->description;
        $description->save();

        $logo = Setting::where('config_key','=','logo')->first();
        $logo->config_value = $request->logo;
        $logo->save();

        $favicon = Setting::where('config_key','=','favicon')->first();
        $favicon->config_value = $request->favicon;
        $favicon->save();

        Session::flash('toastr',[
            'type'  =>  'success',
            'message' => 'Cập nhật website thành công'
        ]);

        return redirect()->back();
    }

    public function social(){
        $facebook = Setting::where('config_key', '=', 'facebook')->first();
        $youtube = Setting::where('config_key', '=', 'youtube')->first();
        $instagram = Setting::where('config_key', '=', 'instagram')->first();
        $twitter = Setting::where('config_key', '=', 'twitter')->first();
        $google = Setting::where('config_key', '=', 'google')->first();
        $github = Setting::where('config_key', '=', 'github')->first();
        $data = [
            'facebook' => $facebook,
            'youtube'  => $youtube,
            'instagram'=> $instagram,
            'twitter'  => $twitter,
            'google'   => $google,
            'github'   => $github
        ];
        return view('admin.setting.index2', $data);
    }

    public function update_social(SettingSocialRequest $request){
        $facebook = Setting::where('config_key','=','facebook')->first();
        $facebook->config_value = $request->facebook;
        $facebook->save();

        $youtube = Setting::where('config_key','=','youtube')->first();
        $youtube->config_value = $request->youtube;
        $youtube->save();

        $instagram = Setting::where('config_key','=','instagram')->first();
        $instagram->config_value = $request->instagram;
        $instagram->save();

        $twitter = Setting::where('config_key','=','twitter')->first();
        $twitter->config_value = $request->twitter;
        $twitter->save();

        $google = Setting::where('config_key','=','google')->first();
        $google->config_value = $request->google;
        $google->save();

        $github = Setting::where('config_key','=','github')->first();
        $github->config_value = $request->github;
        $github->save();

            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Cập nhật mạng xã hội thành công'
            ]);

        return redirect()->back();
    }

    public function active($id){
        $setting = Setting::find($id);
        $setting->status = ! $setting->status;
        $setting->save();
        return redirect()->back();
    }
}

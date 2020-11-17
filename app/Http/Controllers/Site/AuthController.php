<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect()->route('site.home');
        }
        return view('site.auth.login');
    }

    public function postLogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            return redirect()->route('site.home');
        }
        return redirect()->back()->withErrors(['invalid'=>'Sai thông tin tài khoản']);

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('site.home');
    }

    public function get_login_social($social){
        return Socialite::driver($social)->redirect();
    }

    public function check_login_social($social){
        $info = Socialite::driver($social)->user();
        dd($info);
    }
}

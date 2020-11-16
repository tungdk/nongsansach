<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}

<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function getLogin(){
        return view('admin.auth.login');
    }
    public function postLogin(LoginRequest $request){
//        $login = $request->only('email','password');
//        if(Auth::attempt($login)){
//
//        }
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/admin');
        }

//        if (Auth::guard(['email' => $request->email, 'password' => $request->password], $request->remember)) {
//            return redirect()->intended('/admin');
//        }
        return back()->withInput($request->only('email','remember'));
    }
}

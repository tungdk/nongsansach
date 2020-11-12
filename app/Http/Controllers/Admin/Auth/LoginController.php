<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
//    use Authenticatable;
    public function getLogin(){
        return view('admin.auth.login');
    }
    public function postLogin(LoginRequest $request){
        if (Auth::guard('admins')->attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email'));
    }

    public function getLogout(){
        Auth::guard('admins')->logout();
        return redirect()->to('/admin/login');
    }
}

<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
//    use Authenticatable;
    public function getLogin(){
        $check_login = Auth::guard('admins')->check();
        if($check_login){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }
    public function postLogin(LoginRequest $request){
        $data = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::guard('admins')->attempt($data)) {
            Session::flash('toastr',[
                'type'  =>  'success',
                'message' => 'Đăng nhập thành công'
            ]);
            return redirect()->intended('/admin');
        }
//        Session::flash('error', 'Tài khoản không đúng!');
        return redirect()->back()->with('error', 'Tài khoản không đúng. Vui lòng thử lại!');
    }

    public function getLogout(){
        Auth::guard('admins')->logout();
        return redirect()->to('/admin/login');
    }
}

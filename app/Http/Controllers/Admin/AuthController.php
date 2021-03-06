<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\Admin;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;

class AuthController extends Controller
{
    public function index(){
        $admin = Admin::query()->findOrFail(Auth::id());
        return view('admin.auth.account', compact('admin'));
    }
    public function getLogin()
    {
//        echo "ahihi";
//        var_dump(Auth::user());
//        die();
        $check_login = Auth::guard('admin')->check();
        if ($check_login) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::guard('admin')->attempt($data)) {
            return response()->json([
                'error' => false,
                'message' => 'Success'
            ]);
        }
        $errors = new MessageBag(['errorLogin' => 'Email hoặc mật khẩu không đúng!']);
        return response()->json([
            'error' => true,
            'message' => $errors
        ]);
    }

    public function getLogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->to('/admin/login');
    }

    public function change_password(Request $request){
        $admin = Admin::query()->findOrFail(Auth::id());
        if(Hash::check($request->password_old, $admin->password)){
            $admin->password = Hash::make($request->password_new);
            $admin->save();
            return response()->json([
                'status' => true
            ], 200);
        }
        return response()->json([
            'status' => false
        ], 404);

    }
}

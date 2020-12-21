<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginRequest;
use App\Http\Requests\Site\RegisterRequest;
use App\Jobs\SendEmailVerifyRegisterJob;
use App\Mail\SendRegisterMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends SiteController
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('site.home');
        }
        return view('site.auth.master_login');
    }

    public function postLogin(LoginRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = User::query()
            ->where('email', $email)
            ->where('active', 1)->first();
        if ($user) {
            if (Hash::check($password, $user->password)) {
                if ($user->confirmed == 1) {
                    Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1]);
                    return response()->json([
                       'message' => 'Đăng nhập thành công'
                    ], 200);
                }
                return response()->json([
                    'message' => 'Tài khoản chưa được xác minh'
                ], 401);
//                return view('site.auth.verify-email', compact('email'));
            }
        }
        return response()->json([
            'message' => 'Sai thông tin tài khoản'
        ], 404);
//        return redirect()->back()->withErrors(['invalid'=>'Sai thông tin tài khoản']);

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('site.home');
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('site.home');
        }
        return view('site.auth.master_login');
    }

    public function postRegister(RegisterRequest $request)
    {
        $confirmation_code = time() . uniqid(true);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->confirmation_code = $confirmation_code;
        $user->confirmed = 0;
        $user->time_expired_code = Carbon::now()->addHour(1);
        $user->save();
        SendEmailVerifyRegisterJob::dispatch($request->email, $confirmation_code);
        return view('site.auth.verify-email', ['email'=>$request->email]);
    }

    public function verify_register($code)
    {
        $user = User::query()->where('confirmation_code', $code)->first();
        if ($user){
            if ($user->time_expired_code >= Carbon::now()) {
                $user->confirmed = 1;
                $user->confirmation_code = null;
                $user->time_expired_code = null;
                $user->save();

                Auth::loginUsingId($user->id);
                return redirect()->route('site.home');
            } else {
                $message = 'Link xác thực đã hết hạn';
            }
        }
        else {
            $message = 'Đường dẫn không chính xác';
        }
        return redirect()->route('site.login.get')->with('message', $message);
    }

    public function verify()
    {
        return view('site.auth.verify-email');
    }

    public function resend_email(Request $request)
    {
        $email = $request->email;
        $user = User::query()->where('email', $email)->first();
        if ($user) {
            if ($user->confirmed != 1) {
                $confirmation_code = time() . uniqid(true);
                $user->confirmation_code = $confirmation_code;
                $user->time_expired_code = Carbon::now()->addHours(1);
                $user->update();
                SendEmailVerifyRegisterJob::dispatch($request->email, $confirmation_code);
            }
            else{
                echo 'email đã xác thực rồi, chuyển đến trang login';
            }
        } else {
            echo 'email không tồn tại';
        }
    }
}

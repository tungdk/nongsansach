<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\LoginRequest;
use App\Http\Requests\Site\RegisterRequest;
use App\Mail\SendRegisterMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
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

    public function register(){
        return view('site.auth.login');
    }

    public function postRegister(RegisterRequest $request){
        $confirmation_code = time().uniqid(true);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'confirmation_code' => $confirmation_code,
            'confirmed' => 0,
        ];
        User::query()->create($data);
//        dump($data) ;
//        User::query()->create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//            'confirmation_code' => $confirmation_code,
//            'confirmed' => 0,
//        ]);
//        Mail::send('email.verify', $confirmation_code, function($message) {
//            $message->to($request->email, $request->name))
//                ->subject('Verify your email address');
//        });

//        $data = $request->except('_token', 'confirm_password');
//        $data['password']  = Hash::make($data['password']);
//        $data['created_at'] = Carbon::now();

        Mail::to($request->email)->send(new SendRegisterMail($request->name, $confirmation_code));

        echo 'Gửi email xác thực thành công';
//        return redirect(route('login'))->with('status', 'Vui lòng xác nhận tài khoản email');

//        $id = User::query()->insertGetId($data);
//
//        if($id){
//            Session::flash('toastr',[
//                'type' => 'success',
//                'message' => 'Đăng ký thành công'
//            ]);
//            Mail::to($request->email)->send(new SendRegisterMail($request->name));
//        }
        echo 'Đăng ký thành công';
    }

    public function verify_register($code){
        $user = User::query()->where('confirmation_code', $code);

        if ($user->count() > 0) {
            $user->update([
                'confirmed' => 1,
                'confirmation_code' => null
            ]);
//            $notification_status = 'Bạn đã xác nhận thành công';
           echo 'Bạn đã xác nhận thành công';
        } else {
//            $notification_status ='Mã xác nhận không chính xác';
            echo 'Mã xác nhận không chính xác';
        }

    }
}

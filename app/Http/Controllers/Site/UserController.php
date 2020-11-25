<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends SiteController
{
    public function get_user(){
        $user_id = Auth::id();
        $user = User::query()->where('id', $user_id)->where('active', 1)->first();
        return $user;
    }
    public function index()
    {
        if(Auth::check()){
            $user = $this->get_user();
            return view('site.user.index', compact('user'));
        }
        return view('site.user.index');
    }

    public function profile()
    {
        $user = $this->get_user();
        return response()->json([
            'view' => view('site.user.components.profile', [
                'user' => $user,
            ])->render(),
            'pageTitle' => 'Thông tin tài khoản'
        ]);
    }

    public function address()
    {
        return response()->json([
            'view' => view('site.user.components.address')->render()
        ]);
    }

    public function password()
    {
        return response()->json([
            'view' => view('site.user.components.password')->render()
        ]);
    }

    public function purchase()
    {
        return response()->json([
            'view' => view('site.user.components.purchase')->render()
        ]);
    }

}

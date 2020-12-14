<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends SiteController
{
    public function get_user()
    {
        $user_id = Auth::id();
        $user = User::query()
            ->where([
                ['id', $user_id],
                ['active', 1]
            ])
            ->first(['name', 'email', 'address', 'phone', 'created_at']);
        return $user;
    }

    public function index()
    {
        if (Auth::check()) {
            $user = $this->get_user();
            return view('site.user.index', compact('user'));
        }
        return view('site.user.index');
    }

    public function profile(Request $request)
    {
        if ($request->ajax()) {
            $user = $this->get_user();
            return response()->json([
                'view' => view('site.user.components.profile', [
                    'user' => $user,
                ])->render(),
                'pageTitle' => 'Thông tin tài khoản'
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user'));
    }

    public function address(Request $request)
    {
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.address')->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user'));
    }

    public function password(Request $request)
    {
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.password')->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user'));
    }

    public function purchase(Request $request)
    {
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.purchase')->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user'));
    }

    public function comment(Request $request)
    {
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.comment')->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user'));
    }

    public function favourite(Request $request)
    {
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.favourite')->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user'));
    }

}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Favourite;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $orders = Order::query()->where('user_id', Auth::id())->get();
        if (Auth::check()) {
            $user = $this->get_user();
            return view('site.user.index', compact('user', 'orders'));

        }
        return view('site.user.index', compact('orders'));
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

    public function update_profile(Request $request)
    {
        $user = User::query()->findOrFail(Auth::id());
        $user->phone = $request->phone;
        $user->name = $request->name;
        $user->address = $request->address;
        try {
            $user->save();
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Có lỗi xảy ra'
            ]);
        }
        return response()->json([
            'status' => true,
            'message' => 'Cập nhật thông tin thành công'
        ]);
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

    public function change_password(Request $request)
    {
        $user = User::query()->findOrFail(Auth::id());
        $password_old = $request->password_old;
        $password_new = $request->password_new;
        $password_confirm = $request->password_confirm;

        $check_pass = Hash::check($password_old, $user->password);
        if($check_pass){
            $user->password = Hash::make($password_new);
            try {
                $user->save();
            }
            catch (\Exception $e) {
                return response()->json([
                    'status' => false,
                    'message' => 'Có lỗi xảy ra'
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Đổi mật khẩu thành công'
            ]);
        }
        else{
            return response()->json([
                'status' => false,
                'message' => 'Mật khẩu cũ không đúng'
            ]);
        }
    }

    public function purchase(Request $request)
    {
        $orders = Order::query()->findOrFail(Auth::id());
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.purchase', [
                    'orders' => $orders
                ])->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user', 'orders'));
    }

    public function comment(Request $request)
    {
        $comments = Comment::query()
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->paginate(5);
        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.comment', [
                    'comments' => $comments
                ])->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user', 'comments'));
    }

    public function favourite(Request $request)
    {
        $favourites = Favourite::query()
            ->where('user_id', Auth::id())
            ->orderByDesc('created_at')
            ->paginate(5);

        if ($request->ajax()) {
            return response()->json([
                'view' => view('site.user.components.favourite',[
                    'favourites' => $favourites
                ])->render()
            ]);
        }
        $user = $this->get_user();
        return view('site.user.index', compact('user', 'favourites'));
    }

    public function delete_favourite(Request $request){
        $favourite = Favourite::query()->findOrFail($request->id);
        $favourite->delete();
        $favourites = Favourite::query()->where('user_id', Auth::id())->orderByDesc('created_at')->get();
        return response()->json([
            'status' => true,
            'message' => 'Xoá thành công',
            'view' => view('site.user.components.favourite',[
                'favourites' => $favourites
            ])->render()
        ]);
    }
}

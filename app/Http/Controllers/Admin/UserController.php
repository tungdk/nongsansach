<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $data = [
          'users' => $users
        ];
        return view('admin.user.index', $data   );
    }

    public function active($id){
        $user = User::query()->findOrFail($id);
        $user->active = ! $user->active;
        $user->save();
        return redirect()->back();
    }

    public function show($id){
        return view('admin.user.show');
    }
}

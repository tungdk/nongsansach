<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends SiteController
{
    public function index()
    {
        return view('site.user.index');
    }

    public function profile()
    {
        return response()->json([
            'view' => view('site.user.components.profile')->render()
        ]);
//        return view('site.user.index');
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

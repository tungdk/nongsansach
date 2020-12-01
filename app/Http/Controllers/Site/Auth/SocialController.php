<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect()->to('home');

    }

    function createUser($getInfo, $provider)
    {
        $user = User::query()->where('email', $getInfo->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $getInfo->name;
            $user->email = $getInfo->email;
            $user->confirmed = 1;
            $user->provider = $provider;
            $user->provider_id = $getInfo->id;
            $user->save();
        }
        return $user;
    }
}

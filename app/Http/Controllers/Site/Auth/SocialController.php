<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function get_login_social($social){
        return Socialite::driver($social)->redirect();
    }

    public function check_login_social($social){
        $info = Socialite::driver($social)->user();
        dd($info);
    }

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->user();

        $user = $this->createUser($getInfo,$provider);

        auth()->login($user);

        return redirect()->to('/home');
    }

    function createUser($getInfo,$provider){

        $user = User::query()->where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $user = User::query()->create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}

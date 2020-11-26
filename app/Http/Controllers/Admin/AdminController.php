<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function get_email_user_subscribe(){
        $emails = [];
        $get_email_user = User::query()->select('email')->where('active', 1)->get();
        foreach ($get_email_user as $email){
            array_push($emails, $email->email);
        }
        $get_email_subscribe = Subscribe::query()->select('email')->get();
        foreach ($get_email_subscribe as $email){
            array_push($emails, $email->email);
        }
        $emails =  array_unique($emails);
        return $emails;
    }
}

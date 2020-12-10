<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends SiteController
{
    public function index(){
        return view('site.contact.index');
    }

    public function store(ContactRequest $request){
        Contact::query()->create($request->only(['name', 'phone', 'email', 'message']));
        return back()->with('success', 'Gửi liên hệ thành công');
    }
}

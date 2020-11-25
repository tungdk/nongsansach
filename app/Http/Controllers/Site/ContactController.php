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
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->with('success', 'Gửi liên hệ thành công');
    }
}

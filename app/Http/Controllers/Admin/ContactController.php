<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::query()
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'email', 'phone', 'message', 'created_at', 'status']);
        return view('admin.contact.index', compact('contacts'));
    }

    public function status($id, $status){
        $contact = Contact::query()->findOrFail($id);
        if($contact->status == 1 && ($status == 0 || $status == 2)){
            $contact->status = $status;
            $contact->save();
        }
        return back();
    }
}

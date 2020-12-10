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
            ->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }
}

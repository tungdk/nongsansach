<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('admin.contact.index');
    }

    public function load_data(){
        $contacts = Contact::query()
            ->orderByDesc('created_at')
            ->get(['id', 'name', 'email', 'phone', 'message', 'created_at', 'status']);
        return response()->json([
            'view' => view('admin.contact.data', [
                'contacts' => $contacts
            ])->render()
        ]);
    }
    public function status(ContactRequest $request){
//        return $request->all();
        $id = $request->id;
        $status = $request->status;
        $contact = Contact::query()->findOrFail($id);
        if($contact->status == 1 && ($status == 0 || $status == 2)){
            $contact->status = $status;
            $contact->save();
            $contacts = Contact::query()
                ->orderByDesc('created_at')
                ->get(['id', 'name', 'email', 'phone', 'message', 'created_at', 'status']);
            return response()->json([
                'view' => view('admin.contact.data', [
                    'contacts' => $contacts
                ])->render()
            ]);
        }
        else{
            return response()->json([
                'message' => "Có lỗi xảy ra"
            ], 404);
        }

    }
}

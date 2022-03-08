<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
       $rules = [
            'name' => 'required|',
            'email' => 'required|',
            'subject' => 'required|',
            'message' => 'required|',
        ];
  
        $validator = Validator::make($request->all(), $rules);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'name' => addslashes($request->name),
            'email' => addslashes($request->email),
            'subject' => addslashes($request->subject),
            'message' => addslashes($request->message),
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $create = Contact::insert($data);
        return back()->with('success','Thank you for your immediate response. The information you provided will help us to move forward with the next steps (you can use your details instead of “next steps”). We will be in touch soon once we have finished our process and are ready for your review');
    }
}

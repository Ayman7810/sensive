<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request) {
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:contacts,email',
            'subject'=>'required',
            'message'=>'required',
        ]);

        // dd($data);
        Contact::create($data);

        return back()->with('status','Send messaged');
    }
}
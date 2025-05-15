<?php

namespace App\Http\Controllers;

use App\Models\Subcribe;
use Illuminate\Http\Request;

class SubcribeController extends Controller
{
    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'email'=>'required|email|unique:subcribes,email'
        ]);

        Subcribe::create($data);

        return back()->with('status','You have subscribed.');
    }
}
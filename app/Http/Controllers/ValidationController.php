<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    //
    public function showform() {
        return view('login');
     }
     public function validateform(Request $request) {
        print_r($request->all());
        $this->validate($request,[
           'username'=>'required|min:8|max:20',
           'password'=>'required'
        ]);
     }
}

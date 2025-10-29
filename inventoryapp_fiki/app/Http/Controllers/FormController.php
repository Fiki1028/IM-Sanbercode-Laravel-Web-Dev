<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome(Request $request){
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return view('welcome', [
            'first_name' => $firstName,
            'last_name' => $lastName,
        ]);
    }
}

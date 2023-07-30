<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function showRegistrationForm(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'login'=>'required|string',
            'email'=>'required|email',
            'age'=>'required|integer|min:18',
            'passwrd'=>[
                'required',
                'confirmed',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d])\S{6,}$/'
                ]
        ], [
            'passwrd.regex'=>'The password must contain at least one lowercase letter, one uppercase letter, and one symbol.'
        ]);

        // Check if the password matches the confirmation
        if($request->passwrd !== $request->passwrd_confirmation){
            return back()->with('error', 'Password and confirmation do not match.')->withInput();
        }

        // Check if the age is at least 18
        if($request->age < 18){
            return back()->with('error', 'Access to content is denied for users under 18.')->withInput();
        }

        // Registration successful, display user info
        return view('userinfo', [
            'login'=>$request->login,
            'email'=>$request->email,
            'age'=>$request->age
        ]);
    }
}

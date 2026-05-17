<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    
    public function login(){
        return view('admin.login');
    }

    public function create(Request $request){

        $attributes = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required']
        ]);

        $remember = $request->remember === 'checked' ? true : false;

        if(Auth::attempt($attributes, $remember)){
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}

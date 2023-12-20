<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function index(){
        return view('home');
    }
    
    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        if (auth()->attempt($request->only('email','password'))){
            return redirect('/');
        }
        else{
            session()->flash('error','Email atau Password salah');
        }
        return redirect('/login');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }
    
    public function actionregister(Request $request)
    {
        $user = User::create([
            'id' => 1,  // id defaultnya 1
            'username' => $request->username,   // username tidak boleh sama
            'email' => $request->email, // email tidak boleh sama
            'password' => Hash::make($request->password), // Hash::make() untuk enkripsi password 
            'role' => 'user', // defaultnya role nya user
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan username dan password.');    // membuat flash message menggunakan sessions
        return redirect('register'); // redirect ke halaman login
    }
}
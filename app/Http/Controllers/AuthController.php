<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index()
    {
        if (!Auth::check()){
            return view('admin.login');
        }else{
            return redirect('admin/dashboard');
        }
    }  

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/dashboard');
        }else{
            return redirect("auth/login")->withError('Email atau Password anda Salah!');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('auth/login');
    }
}

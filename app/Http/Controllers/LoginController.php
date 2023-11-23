<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
// use Illuminate\Support\Facades\Auth;
use Auth;

class LoginController extends Controller
{

    public function halamanLogin(){
        return view('main.auth.login');
    }

    public function postLogin(Request $request){
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/dashboard-admin');
        }
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/dashboard-user');
    }

    // public function authenticate(Request $request){
    //     $credentials = $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/dashboard-admin');
    //     }

    //     return back()->with('loginError', 'Login Gagal!');

    // }
}
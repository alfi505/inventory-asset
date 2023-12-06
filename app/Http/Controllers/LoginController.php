<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{

    public function index(){
        return view('main.auth.login');
    }

    public function authenticate(Request $request): RedirectResponse{

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard-admin');
        }
        return back()->withErrors([
            'loginerror', 'login failed!'
        ]);
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

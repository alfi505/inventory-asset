<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index(){
        // $id=Auth::user();
        // dd($id);

        return view('main.home.dashboard-admin',[
            'hehe'=>Auth::user()
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PIC extends Controller
{
    public function index()
    {
        $data = [
            'slug' => 'pic',
        ];
        return view ('main.home.pic', $data);
    }
}
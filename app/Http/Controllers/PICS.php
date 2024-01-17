<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Workstation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PICS extends Controller
{
    public function index()
    {
        $data = [
            'totalCountpic' => Pic::count(),
            'totalCount1' => Workstation::count(),
            'slug' => 'pic',
        ];
        return view ('main.home.pic', $data);
    }
}
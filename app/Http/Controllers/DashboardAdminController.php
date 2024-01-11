<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Workstation;
use App\Models\InventoryCpu;
use App\Models\InventoryMouse;
use App\Models\InventoryMonitor;
use App\Models\InventoryNetwork;
use App\Models\InventoryPrinter;
use App\Models\InventorySpeaker;
use App\Models\InventoryKeyboard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index(){
        // $id=Auth::user();
        // dd($id);

        $data = [
            'user'=> Auth::user(),
            'totalCpu' => InventoryCpu::count(),
            'totalMonitor' => InventoryMonitor::count(),
            'totalKeyboard' => InventoryKeyboard::count(),
            'totalMouse' => InventoryMouse::count(),
            'totalSpeaker' => InventorySpeaker::count(),
            'totalNetwork' => InventoryNetwork::count(),
            'totalPrinter' => InventoryPrinter::count(),
            'totalPic' => Pic::count(),
            'totalWorkstation' => Workstation::count(),
            'slug' => 'dashboard'
        ];

        return view('main.home.dashboard-admin', $data);
    }
}
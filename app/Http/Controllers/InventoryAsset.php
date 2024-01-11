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
use Illuminate\Routing\Controller;

class InventoryAsset extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'totalCpu' => InventoryCpu::count(),
            'totalMonitor' => InventoryMonitor::count(),
            'totalKeyboard' => InventoryKeyboard::count(),
            'totalMouse' => InventoryMouse::count(),
            'totalSpeaker' => InventorySpeaker::count(),
            'totalNetwork' => InventoryNetwork::count(),
            'totalPrinter' => InventoryPrinter::count(),
            'totalPic' => Pic::count(),
            'totalWorkstation' => Workstation::count(),
            'slug' => 'inventory'
        ];

        return view('main.home.inventory-asset', $data);
    }
}
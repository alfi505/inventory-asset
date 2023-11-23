<?php

namespace App\Http\Controllers;

use App\Models\InventoryMonitor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storeinventory_monitorRequest;
use App\Http\Requests\Updateinventory_monitorRequest;
use Illuminate\Cache\RateLimiting\Limit;

class InventoryMonitorController extends Controller
{
    public function index()
    {
        //
        $data = [
        'monitors' => InventoryMonitor::get()
        ];

        return view('main.inventory.monitor.detail-monitor', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeinventory_monitorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinventory_monitorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventory_monitor  $inventory_monitor
     * @return \Illuminate\Http\Response
     */
    public function show(inventory_monitor $inventory_monitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventory_monitor  $inventory_monitor
     * @return \Illuminate\Http\Response
     */
    public function edit(inventory_monitor $inventory_monitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinventory_monitorRequest  $request
     * @param  \App\Models\inventory_monitor  $inventory_monitor
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinventory_monitorRequest $request, inventory_monitor $inventory_monitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventory_monitor  $inventory_monitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory_monitor $inventory_monitor)
    {
        //
    }
}
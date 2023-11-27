<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryMonitor;
// use App\Models\DetailInventoryMonitor;

class DetailInventoryMonitorController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetailInventoryMonitor  $detailInventoryMonitor
     * @return \Illuminate\Http\Response
     */
    public function show(DetailInventoryMonitor $detailInventoryMonitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetailInventoryMonitor  $detailInventoryMonitor
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailInventoryMonitor $detailInventoryMonitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetailInventoryMonitor  $detailInventoryMonitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetailInventoryMonitor $detailInventoryMonitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetailInventoryMonitor  $detailInventoryMonitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetailInventoryMonitor $detailInventoryMonitor)
    {
        //
    }
}
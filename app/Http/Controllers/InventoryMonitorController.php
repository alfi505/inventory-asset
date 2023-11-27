<?php

namespace App\Http\Controllers;

use view;
use App\Models\InventoryMonitor;
use App\Http\Controllers\Controller;
use App\Http\Requests\Storeinventory_monitorRequest;
use App\Http\Requests\Updateinventory_monitorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryMonitorController extends Controller
{
    public function index()
    {
        //
        $pbrungkad = [
        'aug' => InventoryMonitor::get()
        ];
        return view('main.inventory.monitor.inventory-monitor', $pbrungkad);
        // return view('main.inventory.monitor.detail-monitor', $pbrungkad);
    }

    public function detail(){
        $data = [
        'monitors' => InventoryMonitor::get()
        ];
        return view('main.inventory.monitor.detail-monitor', $data);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    public function create()
    {
        return view('main.inventory.monitor.tambah-monitor');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\Storeinventory_monitorRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        DB::table('inventory_monitors')->insert([
            'monitor_id_monitor' => $request->id_monitor,
            'monitor_nama_komputer' => $request->nama_komputer,
            'monitor_nama_pic' => $request->nama_pic,
            'monitor_id_cpu' => $request->id_cpu,
            'monitor_merk_id' => $request->merk_id,
            'monitor_jenisperangkat_id' => $request->jenisperrangkat_id,
            'monitor_id_ip' => $request->id_ip,
            'monitor_serial_number' => $request->serial_number,
            'monitor_model_monitor' => $request->model_monitor,
            'monitor_id_poisi' => $request->id_posisi,
            'monitor_admin' => $request->admin,
            'monitor_vendor_id' => $request->vendor_id,
            'monitor_keterangan' => $request->keterangan,
            'monitor_status_id' => $request->status_id,
        ]);

        return redirect('/inventory-monitor');
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

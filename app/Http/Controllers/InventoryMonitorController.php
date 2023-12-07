<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Workstation;
use Illuminate\Http\Request;
use App\Models\JenisPerangkat;
use App\Models\InventoryMonitor;
use App\Models\DetailMonitorXPIC;
use Illuminate\Routing\Controller;
use App\Http\Controllers\DetailMonitorXPICController;

class InventoryMonitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pbrungkad = [
        'aug' => InventoryMonitor::get()
        ];
        return view('main.inventory.monitor.inventory-monitor', $pbrungkad);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $id_monitor = str_replace('_', '/', $id);
        $data = [
            // 'monitor' => InventoryMonitor::findOrFail($id_monitor),
            'monitor' => InventoryMonitor::where('id_monitor', $id_monitor)->first(),
            'monitorData' => DetailMonitorXPIC::where('id', $id)->first(),
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
        $status = Status::all();
        $jenisPerangkat = JenisPerangkat::all();
        $merk = Merk::all();
        $vendor = Vendor::all();
        $workstation = Workstation::all();
        return view('main.inventory.monitor.tambah-monitor', compact('status','jenisPerangkat','merk', 'vendor', 'workstation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // validasi data
        $validateData1 = $request->validate([
            'id_monitor' => 'required',
            'model_monitor' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'jenisperangkat_id' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
            'keterangan' => 'required',
        ]);
        $validateData2 = $request->validate([
            // 'monitor_id' => 'required',
            'pic_id' => 'required',
            'vendor_id' => 'required',
            'workstation_id' => 'required',
        ]);

        // dd($validateData2);
        //create post
        InventoryMonitor::create($validateData1);
        DetailMonitorXPIC::create($validateData2);

        //balik
        return redirect('/inventory-monitor');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
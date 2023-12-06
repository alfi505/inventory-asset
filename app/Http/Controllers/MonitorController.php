<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\JenisPerangkat;
use App\Models\InventoryMonitor;
use Illuminate\Routing\Controller;

class MonitorController extends Controller
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

    public function detail(){
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
        $status = Status::all();
        $jenisPerangkat = JenisPerangkat::all();
        $merk = Merk::all();
        return view('main.inventory.monitor.tambah-monitor', compact('status','jenisPerangkat','merk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
        // validasi data
        $validateData1 = $request->validate([
            'id_monitor' => 'required|min:1',
            'model_monitor' => 'required|min:1',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'jenisperangkat_id' => 'required',
            'admin' => 'required',
            'status_id' => 'required',
        ]);
        $validateData2 = $request->validate([
            'vendor_id' => 'required|min:1',
            'workstation_id' => 'required|min:1',
        ]);

        //create post
        // InventoryMonitor::create($validateData1);

        //balik
        // return redirect('/inventory-monitor');
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
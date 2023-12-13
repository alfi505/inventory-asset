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
use App\Models\Pic;
use Illuminate\Routing\Controller;

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
        'aug' => InventoryMonitor::get(),
        'totalCount' => InventoryMonitor::count()
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
        $merks = Merk::all();
        $vendor = Vendor::all();
        $workstation = Workstation::all();
        $monitors = InventoryMonitor::all();
        $pic = Pic::all();

        return view('main.inventory.monitor.tambah-monitor', compact('status','jenisPerangkat','merks', 'vendor', 'workstation', 'monitors', 'pic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // function getLastnumber($count) {

    // }
    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryMonitor::count()+1;
        if ($count > 0 && $count < 10) {
            $count = '00' . $count;
        } else if ($count < 100) {
            $count = '0' . $count;
        }
        $kategori = JenisPerangkat::findOrFail($kategori_id);
        $merk = Merk::findOrFail($merk_id);
        return "MAK/IT/{$kategori->jenisperangkat}-{$merk->merk}/{$tgl_perolehan}/{$kategori->id_detail}{$count}";
    }

    public function store(Request $request)
    {
        $originalDate = $request->tanggal_input;
        $newDate = date("md", strtotime($originalDate));

        $jenisP = $request->jenisperangkat_id = 1;

        $id = $this->generateId($request->jenisperangkat_id, $request->merk_id, $newDate);
        // validasi data
        $validateData1 = $request->validate([
            // 'id_monitor' => 'required',
            'model_monitor' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            // 'jenisperangkat_id' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
            'keterangan' => 'required',
        ]);

        $validateData1['jenisperangkat_id'] = $jenisP;

        $validateData2 = $request->validate([
            // 'monitor_id' => 'required',
            'pic_id' => 'required',
            'vendor_id' => 'required',
            'workstation_id' => 'required',
        ]);

        $newData = [
            'monitor_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_monitor"=>$id
        ]);

        $data2 = array_merge($validateData2, $newData);

        //create post
        InventoryMonitor::create($data1);
        DetailMonitorXPIC::create($data2);

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
        $id_monitor = str_replace('_', '/', $id);

        $hehe = [
            'data' => InventoryMonitor::findOrFail($id_monitor),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailMonitorXPIC::where('monitor_id', $id_monitor)->first(),
            'monitors' => InventoryMonitor::where('id_monitor', $id_monitor)->first(),
            'pic' => Pic::all(),
        ];
        return view('main.inventory.monitor.edit-monitor', $hehe);
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
        // dd($request);
        $id_monitor = str_replace('_', '/', $id);
        $invenMonitor = InventoryMonitor::where('id_monitor', $id_monitor)->first();
        $detailMonitor = DetailMonitorXPIC::where('monitor_id', $id_monitor)->first();

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
            'pic_id' => 'required',
            'vendor_id' => 'required',
            'workstation_id' => 'required',
        ]);
        
        // dd($validateData2);
        //update post
        $invenMonitor->update($validateData1);
        $detailMonitor->update($validateData2);

        return redirect('/inventory-monitor');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_monitor = str_replace('_', '/', $id);
        $hapus = InventoryMonitor::findOrFail($id_monitor);
        $hapus->delete();

        return redirect('/inventory-monitor');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Merk;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Workstation;
use Illuminate\Http\Request;
use App\Models\JenisPerangkat;
use App\Models\InventoryMonitor;
use App\Models\DetailMonitorXPIC;
use App\Models\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

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
        'aug' => DetailMonitorXPIC::get(),
        'totalCount' => InventoryMonitor::count(),
        'slug' => 'inventory'
        ];

        return view('main.inventory.monitor.inventory-monitor', $pbrungkad);
    }

    public function alert()
    {
        try {
            // Your success logic here

            Session::flash('success', 'Operation completed successfully');
        } catch (\Exception $e) {
            // Your error logic here

            Session::flash('error', 'Operation failed. Please try again.');
        }

        return redirect()->back();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $id_monitor = str_replace('_', '/', $id);
        $data = [
            'monitor' => InventoryMonitor::where('id_monitor', $id_monitor)->first(),
            'monitorData' => DetailMonitorXPIC::where('monitor_id', $id_monitor)->first(),
            'slug' => 'inventory',
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
        $data = [
            'status' => Status::all(),
            // Untuk jenis perangkat berdasarkan detail atau assetnya
            'jenisPerangkat' => JenisPerangkat::where('detail', 1)->get(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'monitors' => InventoryMonitor::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.monitor.tambah-monitor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function getTheIncrement($count) {
        $count = InventoryMonitor::count()+1;

        return ($count);
    }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryMonitor::count()+1;
        if ($count > 0 && $count < 10) {
            $count = '00' . $count;
        } else if ($count < 100) {
            $count = '0' . $count;
        }
        $kategori = JenisPerangkat::findOrFail($kategori_id);
        $merk = Merk::findOrFail($merk_id);
        return "MAK/IT/{$kategori->jenisperangkat}-{$merk->merk}/{$tgl_perolehan}/{$kategori->detail}{$count}";
    }

    public function store(Request $request)
    {
        $originalDate = $request->tanggal_input;
        $newDate = date("md", strtotime($originalDate));

        //manggil data
        $id = $this->generateId($request->jenisperangkat_id, $request->merk_id, $newDate);

        // validasi data
        $validateData1 = $request->validate([
            'model_monitor' => 'required',
            'merk_id' => 'required',
            'jenisperangkat_id' => 'required',
            'serial_number' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
            'keterangan' => 'required',
        ]);

        $validateData2 = $request->validate([
            'pic_id' => 'required',
            'vendor_id' => 'required',
        ]);

        //update data yang ada di pic buat nambah id asset
        $validateData3['id_monitor'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        $newData = [
            'monitor_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_monitor" => $id,
        ]);

        //menggabungkan 2 variabel
        $data2 = array_merge($validateData2, $newData);

        //create post
        InventoryMonitor::create($data1);
        DetailMonitorXPIC::create($data2);

        //balik
        return redirect('/inventory-monitor')->with('toast_success', 'Data Telah Ditambahkan');
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
            'admin' => User::all(),
            'slug' => 'inventory',
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
        $id_monitor = str_replace('_', '/', $id);

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
        ]);

        $request->validate([
            'pic_id' => 'required',
            'id_monitor' => 'required',
        ]);
        $validateData3 = [
            'id_monitor' => $request->id_monitor,
        ];

        $existingPic = Pic::where('id_monitor', $id_monitor)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_monitor' => null]);
        } else {
        }

        //update data yang ada di pic buat nambah id asset
        InventoryMonitor::where('id_monitor', $id_monitor)->update($validateData1);
        DetailMonitorXPIC::where('monitor_id', $id_monitor)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-monitor/edit-monitor/'.$id)->with('toast_success', 'Data Telah Diubah');
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
        $inventory = InventoryMonitor::findOrFail($id_monitor);
        $inventory->delete();

        return redirect('/inventory-monitor')->with('toast_warning', 'Data Telah Dihapus');
    }
}
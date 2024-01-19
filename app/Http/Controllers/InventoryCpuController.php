<?php

namespace App\Http\Controllers;

use App\Models\CpuXSoftware;
use App\Models\Pic;
use App\Models\Merk;
use App\Models\User;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Workstation;
use App\Models\InventoryCpu;
use Illuminate\Http\Request;
use App\Models\DetailCpuXPIC;
use App\Models\JenisPerangkat;
use App\Models\Software;
use Illuminate\Routing\Controller;

class InventoryCpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = [
        'cpu' => DetailCpuXPIC::get(),
        'totalCount' => InventoryCpu::count(),
        'slug' => 'inventory'
        ];

        return view('main.inventory.cpu.inventory-cpu', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $id_cpu = str_replace('_', '/', $id);
        $data = [
            'cpu' => InventoryCpu::where('id_cpu', $id_cpu)->first(),
            'cpuData' => DetailCpuXPIC::where('cpu_id', $id_cpu)->first(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.cpu.detail-cpu', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function cekHostname($id){
    //     $nama_kom = Workstation::where('no_ip_address', $id)->first();
    //     return response()->json([
    //         'data' => $nama_kom
    //     ]);
    // }

    public function create()
    {
        $data = [
            'status' => Status::all(),
            // Untuk jenis perangkat berdasarkan detail atau assetnya
            'jenisPerangkat' => JenisPerangkat::where('detail', 6)->get(),
            'merks' => Merk::where('id', 1)->get(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'cpus' => InventoryCpu::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'software' => Software::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.cpu.tambah-cpu', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        function getTheIncrement($count) {
            $count = InventoryCpu::count()+1;

            return ($count);
        }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryCpu::count()+1;
        if ($count > 0 && $count < 10) {
            $count = '00' . $count;
        } else if ($count < 100) {
            $count = '0' . $count;
        }
        $kategori = JenisPerangkat::findOrFail($kategori_id);
        $merk = Merk::findOrFail($merk_id);
        return "MAK/IT/{$kategori->jenisperangkat}-{$merk->merk}/{$tgl_perolehan}/{$kategori->detail}{$count}";
    }

    public function store(Request $request){
        // dd($request);
        $originalDate = $request->tanggal_input;
        $newDate = date("md", strtotime($originalDate));

        //manggil data
        $id = $this->generateId($request->jenisperangkat_id, $request->merk_id, $newDate);

        // validasi data
        $validateData1 = $request->validate([
            'hostname' => 'required',
            'jenisperangkat_id' => 'required',
            'merk_id' => 'required',
            // 'zona' => 'required',
            'kategori' => 'required',
            'serial_number' => 'required',
            'os' => 'required',
            'processor' => 'required',
            'mainboard' => 'required',
            'ram' => 'required',
            'rom' => 'required',
            'vga' => 'required',
            'soundcard' => 'required',
            'cdroom' => 'required',
            'nic' => 'required',
            'mac' => 'required',
            'casing' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
        ]);

        $validateData2 = $request->validate([
            'pic_id' => 'required',
            'vendor_id' => 'required',
            'workstation_id' => 'required',
        ]);

        //update data yang ada di pic buat nambah id asset
        $validateData3['id_cpu'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        // Create an array for software relationships
        $data1 = array_merge($validateData1, [
            "id_cpu" => $id,
        ]);
        
        $works = Workstation::where('id', $request->workstation_id)->first();
        $works->update([
            'hostname' => $request->hostname,
        ]);
        
        foreach ($request->software_id as $softwareId) {
        CpuXSoftware::create([
            'software_id' => $softwareId,
            'cpu_id' => $id,
        ]);
        }
        //menggabungkan 2 variabel
        // $data2 = array_merge($validateData2, [
            //     "cpu_id" => $id,
        // ]);

        // dd($data2);
        //create post
        $inventorycpu = InventoryCpu::create($data1);
        $inventorycpu->detailcpu()->create([
            'pic_id' => $validateData2['pic_id'],
            'vendor_id' => $validateData2['vendor_id'],
            'workstation_id' => $validateData2['workstation_id'],
            "cpu_id" => $id,
        ]);


        //balik
        return redirect('/inventory-cpu')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
        $id_cpu = str_replace('_', '/', $id);

        $hehe = [
            'data' => InventoryCpu::findOrFail($id_cpu),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailCpuXPIC::where('cpu_id', $id_cpu)->first(),
            'cpus' => InventoryCpu::where('id_cpu', $id_cpu)->first(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'software' => Software::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.cpu.edit-cpu', $hehe);
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
        $id_cpu = str_replace('_', '/', $id);

        $validateData1 = $request->validate([
            'hostname' => 'required',
            'jenisperangkat_id' => 'required',
            'merk_id' => 'required',
            // 'zona' => 'required',
            'kategori' => 'required',
            'serial_number' => 'required',
            'os' => 'required',
            'processor' => 'required',
            'mainboard' => 'required',
            'ram' => 'required',
            'rom' => 'required',
            'vga' => 'required',
            'soundcard' => 'required',
            'cdroom' => 'required',
            'nic' => 'required',
            'mac' => 'required',
            'casing' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
        ]);

        $validateData2 = $request->validate([
            'pic_id' => 'required',
            'vendor_id' => 'required',
        ]);

        $request->validate([
            'pic_id' => 'required',
            'id_cpu' => 'required',
        ]);
        $validateData3 = [
            'id_cpu' => $request->id_cpu,
        ];

        $existingPic = Pic::where('id_cpu', $id_cpu)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_cpu' => null]);
        } else {
        }

        InventoryCpu::where('id_cpu', $id_cpu)->update($validateData1);
        DetailCpuXPIC::where('cpu_id', $id_cpu)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-cpu/edit-cpu/'.$id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_cpu = str_replace('_', '/', $id);
        $inventory = InventoryCpu::findOrFail($id_cpu);
        $inventory->delete();

        return redirect('/inventory-cpu')->with('toast_warning', 'Data Telah Dihapus');
    }
}
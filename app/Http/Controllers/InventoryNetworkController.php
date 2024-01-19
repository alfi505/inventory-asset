<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Merk;
use App\Models\User;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Workstation;
use Illuminate\Http\Request;
use App\Models\JenisPerangkat;
use App\Models\InventoryNetwork;
use App\Models\DetailNetworkXPIC;
use Illuminate\Routing\Controller;

class InventoryNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        'network' => DetailNetworkXPIC::get(),
        'totalCount' => InventoryNetwork::count(),
        'slug' => 'inventory',
        ];
        return view('main.inventory.network.inventory-network', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $id_network = str_replace('_', '/', $id);
        $data = [
            'network' => InventoryNetwork::where('id_network', $id_network)->first(),
            'networkData' => DetailNetworkXPIC::where('network_id', $id_network)->first(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.network.detail-network', $data);
    }
    public function create()
    {
        $data = [
            'status' => Status::all(),
            // Untuk jenis perangkat berdasarkan detail atau assetnya
            'jenisPerangkat' => JenisPerangkat::where('detail', 5)->get(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'networks' => InventoryNetwork::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];
        return view('main.inventory.network.tambah-network', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function getTheIncrement($count) {
            $count = InventoryNetwork::count()+1;

            return ($count);
        }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryNetwork::count()+1;
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
            'model_network' => 'required',
            'merk_id' => 'required',
            'jenisperangkat_id' => 'required',
            'serial_number' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
        ]);

        $validateData2 = $request->validate([
            'pic_id' => 'required',
            'vendor_id' => 'required',
        ]);

        //update data yang ada di pic buat nambah id asset
        $validateData3['id_network'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        $newData = [
            'network_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_network" => $id,
        ]);

        //menggabungkan 2 variabel
        $data2 = array_merge($validateData2, $newData);

        //create post
        InventoryNetwork::create($data1);
        DetailNetworkXPIC::create($data2);

        //balik
        return redirect('/inventory-network')->with('toast_success', 'Data Telah Ditambahkan');
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id_network = str_replace('_', '/', $id);

        $hehe = [
            'data' => InventoryNetwork::findOrFail($id_network),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailNetworkXPIC::where('network_id', $id_network)->first(),
            'networks' => InventoryNetwork::where('id_network', $id_network)->first(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.network.edit-network', $hehe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id_network = str_replace('_', '/', $id);

        $validateData1 = $request->validate([
            'id_network' => 'required',
            'model_network' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'jenisperangkat_id' => 'required',
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
            'id_network' => 'required',
        ]);
        $validateData3 = [
            'id_network' => $request->id_network,
        ];

        $existingPic = Pic::where('id_network', $id_network)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_network' => null]);
        } else {
        }

        //update post
        InventoryNetwork::where('id_network', $id_network)->update($validateData1);
        DetailNetworkXPIC::where('network_id', $id_network)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-network/edit-network/' . $id)->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_network = str_replace('_', '/', $id);
        $inventory = InventoryNetwork::findOrFail($id_network);
        $inventory->delete();

        return redirect('/inventory-network')->with('toast_warning', 'Data Telah Dihapus');
    }
}
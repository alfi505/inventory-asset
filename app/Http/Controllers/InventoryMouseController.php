<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Merk;
use App\Models\User;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Workstation;
use Illuminate\Http\Request;
use App\Models\InventoryMouse;
use App\Models\JenisPerangkat;
use App\Models\DetailMouseXPIC;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class InventoryMouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [
        'mouse' => InventoryMouse::get(),
        'totalCount' => InventoryMouse::count(),
        'slug' => 'inventory',
        ];
        return view('main.inventory.mouse.inventory-mouse', $data);
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

    public function detail($id){

        $id_mouse = str_replace('_', '/', $id);
        $data = [
            'mouse' => InventoryMouse::where('id_mouse', $id_mouse)->first(),
            'mouseData' => DetailMouseXPIC::where('id', $id)->first(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.mouse.detail-mouse', $data);
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
            'jenisPerangkat' => JenisPerangkat::where('detail', 3)->get(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'mice' => InventoryMouse::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.mouse.tambah-mouse', $data);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function getTheIncrement($count) {
        $count = InventoryMouse::count()+1;

        return ($count);
    }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryMouse::count()+1;
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

        $jenisP = $request->jenisperangkat_id = 3;

        //manggil data
        $noMouse = $this->getTheIncrement($request->count);
        $id = $this->generateId($request->jenisperangkat_id, $request->merk_id, $newDate);

        $validateData1 = $request->validate([
            'model_mouse' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
            'keterangan' => 'required',
        ]);

        $validateData1['jenisperangkat_id'] = $jenisP;

        $validateData2 = $request->validate([
            'pic_id' => 'required',
            'vendor_id' => 'required',
            'workstation_id' => 'required',
        ]);

        //update data yang ada di pic buat nambah id asset
        $validateData3['id_mouse'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        $newData = [
            'mouse_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_mouse" => $id,
            "no_mouse" => $noMouse,
        ]);

        //menggabungkan 2 variabel
        $data2 = array_merge($validateData2, $newData);

        //create post
        InventoryMouse::create($data1);
        DetailMouseXPIC::create($data2);

        //balik
        return redirect('/inventory-mouse')->with('toast_success', 'Data Telah Ditambahkan');

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
        $id_mouse = str_replace('_', '/', $id);

        $data = [
            'data' => InventoryMouse::findOrFail($id_mouse),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailMouseXPIC::where('mouse_id', $id_mouse)->first(),
            'mouses' => InventoryMouse::where('id_mouse', $id_mouse)->first(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.mouse.edit-mouse', $data);
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
        $id_mouse = str_replace('_', '/', $id);

        $validateData1 = $request->validate([
            'id_mouse' => 'required',
            'model_mouse' => 'required',
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

        $request->validate([
            'pic_id' => 'required',
            'id_mouse' => 'required',
        ]);
        $validateData3 = [
            'id_mouse' => $request->id_mouse,
        ];

        $existingPic = Pic::where('id_mouse', $id_mouse)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_mouse' => null]);
        } else {
        }

        //update post
        InventoryMouse::where('id_mouse', $id_mouse)->update($validateData1);
        DetailMouseXPIC::where('mouse_id', $id_mouse)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-mouse/edit-mouse/' . $id_mouse)->with('toast_success', 'Data Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_mouse = str_replace('_', '/', $id);
        $inventory = InventoryMouse::findOrFail($id_mouse);
        $inventory->delete();

        return redirect('/inventory-mouse')->with('toast_warning', 'Data Telah Dihapus');
    }
}
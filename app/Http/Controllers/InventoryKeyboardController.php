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
use App\Models\InventoryKeyboard;
use App\Models\DetailKeyboardXPIC;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class InventoryKeyboardController extends Controller
{
    public function index()
    {
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        $data =[
            'keyboards' => DetailKeyboardXPIC::get(),
            'totalCount' => InventoryKeyboard::count(),
            'slug' => 'inventory',
        ];
        return view('main.inventory.keyboard.inventory-keyboard', $data);
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

        $id_keyboard = str_replace('_', '/', $id);
        $data = [
            'keyboard' => InventoryKeyboard::where('id_keyboard', $id_keyboard)->first(),
            // masih null di detail keyboardxpic
            'keyboardData' => DetailKeyboardXPIC::where('keyboard_id', $id_keyboard)->first(),
            'slug' => 'inventory',
        ];

        // dd($data['keyboardData']->vendor->perusahaan);

        return view('main.inventory.keyboard.detail-keyboard', $data);
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
            'jenisPerangkat' => JenisPerangkat::where('detail', 2)->get(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'keyboards' => InventoryKeyboard::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.keyboard.tambah-keyboard', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function getTheIncrement($count) {
        $count = InventoryKeyboard::count()+1;

        return ($count);
    }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryKeyboard::count()+1;
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

        $jenisP = $request->jenisperangkat_id = 2;

        //manggil data
        $nokeyboard = $this->getTheIncrement($request->count);
        $id = $this->generateId($request->jenisperangkat_id, $request->merk_id, $newDate);

        // validasi data
        $validateData1 = $request->validate([
            'model_keyboard' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
        ]);

        $validateData1['jenisperangkat_id'] = $jenisP;

        $validateData2 = $request->validate([
            'pic_id' => 'required',
            'vendor_id' => 'required',
        ]);

        //update data yang ada di pic buat nambah id asset
        $validateData3['id_keyboard'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        $newData = [
            'keyboard_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_keyboard" => $id,
            // "no_keyboard" => $nokeyboard,
        ]);

        //menggabungkan 2 variabel
        $data2 = array_merge($validateData2, $newData);

        // if ($validateData1 and $validateData2->fails()) {
        //     return back()->with('toast_error', $validateData1 and $validateData2->messages()->all()[0])->withInput();
        // }

        //create post
        InventoryKeyboard::create($data1);
        DetailKeyboardXPIC::create($data2);

        //balik
        return redirect('/inventory-keyboard')->with('toast_success', 'Data Telah Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
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
        $id_keyboard = str_replace('_', '/', $id);

        $hehe = [
            'data' => InventoryKeyboard::findOrFail($id_keyboard),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailKeyboardXPIC::where('keyboard_id', $id_keyboard)->first(),
            'keyboards' => InventoryKeyboard::where('id_keyboard', $id_keyboard)->first(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.keyboard.edit-keyboard', $hehe);
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
        $id_keyboard = str_replace('_', '/', $id);

        $validateData1 = $request->validate([
            'id_keyboard' => 'required',
            'model_keyboard' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'jenisperangkat_id' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
            'keterangan' => 'required',
        ]);
        $validateData2 = $request->validate([
            // 'keyboard_id' => 'required',
            'pic_id' => 'required',
            'vendor_id' => 'required',
        ]);

        $request->validate([
            'pic_id' => 'required',
            'id_keyboard' => 'required',
        ]);
        $validateData3 = [
            'id_keyboard' => $request->id_keyboard,
        ];

        $existingPic = Pic::where('id_keyboard', $id_keyboard)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_keyboard' => null]);
        } else {
        }

        // dd($validateData1);
        //update post
        InventoryKeyboard::where('id_keyboard', $id_keyboard)->update($validateData1);
        DetailKeyboardXPIC::where('keyboard_id', $id_keyboard)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-keyboard/edit-keyboard/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_keyboard = str_replace('_', '/', $id);
        $inventory = InventoryKeyboard::findOrFail($id_keyboard);
        $inventory->delete();

        return redirect('/inventory-keyboard')->with('toast_warning', 'Data Telah Dihapus');
    }
}
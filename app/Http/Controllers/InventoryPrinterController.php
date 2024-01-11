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
use App\Models\InventoryPrinter;
use App\Models\DetailPrinterXPIC;
use Illuminate\Routing\Controller;

class InventoryPrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        'printer' => InventoryPrinter::get(),
        'totalCount' => InventoryPrinter::count(),
        'slug' => 'inventory',
        ];
        return view('main.inventory.printer.inventory-printer', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $id_printer = str_replace('_', '/', $id);
        $data = [
            'printer' => InventoryPrinter::where('id_printer', $id_printer)->first(),
            'printerData' => DetailPrinterXPIC::where('id', $id)->first(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.printer.detail-printer', $data);
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
            'jenisPerangkat' => JenisPerangkat::where('detail', 7)->get(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'printers' => InventoryPrinter::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.printer.tambah-printer', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function getTheIncrement($count) {
        $count = InventoryPrinter::count()+1;

        return ($count);
    }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventoryPrinter::count()+1;
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
            'model_printer' => 'required',
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
            'workstation_id' => 'required',
        ]);

        //update data yang ada di pic buat nambah id asset
        $validateData3['id_printer'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        $newData = [
            'printer_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_printer" => $id,
        ]);

        //menggabungkan 2 variabel
        $data2 = array_merge($validateData2, $newData);

        //create post
        InventoryPrinter::create($data1);
        DetailPrinterXPIC::create($data2);

        //balik
        return redirect('/inventory-printer')->with('toast_success', 'Data Telah Ditambahkan');
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
        $id_printer = str_replace('_', '/', $id);

        $hehe = [
            'data' => InventoryPrinter::findOrFail($id_printer),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailPrinterXPIC::where('printer_id', $id_printer)->first(),
            'printers' => InventoryPrinter::where('id_printer', $id_printer)->first(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.printer.edit-printer', $hehe);
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
        $id_printer = str_replace('_', '/', $id);

        $validateData1 = $request->validate([
            'id_printer' => 'required',
            'model_printer' => 'required',
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
            'id_printer' => 'required',
        ]);
        $validateData3 = [
            'id_printer' => $request->id_printer,
        ];

        $existingPic = Pic::where('id_printer', $id_printer)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_printer' => null]);
        } else {
        }

        //update post
        InventoryPrinter::where('id_printer', $id_printer)->update($validateData1);
        DetailPrinterXPIC::where('printer_id', $id_printer)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-printer/edit-printer/' . $id)->with('toast_success', 'Data Telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_printer = str_replace('_', '/', $id);
        $inventory = InventoryPrinter::findOrFail($id_printer);
        $inventory->delete();

        return redirect('/inventory-printer')->with('toast_warning', 'Data Telah Dihapus');
    }
}
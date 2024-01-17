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
use App\Models\InventorySpeaker;
use App\Models\DetailSpeakerXPIC;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class InventorySpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        'speaker' => InventorySpeaker::get(),
        'totalCount' => InventorySpeaker::count(),
        'slug' => 'inventory'
        ];
        return view('main.inventory.speaker.inventory-speaker', $data);
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

        $id_speaker = str_replace('_', '/', $id);
        $data = [
            'speaker' => InventorySpeaker::where('id_speaker', $id_speaker)->first(),
            'speakerData' => DetailSpeakerXPIC::where('speaker_id', $id_speaker)->first(),
            'slug' => 'inventory'
        ];

        return view('main.inventory.speaker.detail-speaker', $data);
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
            'jenisPerangkat' => JenisPerangkat::where('detail', 4)->get(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'speakers' => InventorySpeaker::all(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.speaker.tambah-speaker', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function getTheIncrement($count) {
        $count = InventorySpeaker::count()+1;

        return ($count);
    }

    function generateId($kategori_id, $merk_id, $tgl_perolehan) {
        $count = InventorySpeaker::count()+1;
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
        // $noSpeaker = $this->getTheIncrement($request->count);
        $id = $this->generateId($request->jenisperangkat_id, $request->merk_id, $newDate);

        // validasi data
        $validateData1 = $request->validate([
            'model_speaker' => 'required',
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
        $validateData3['id_speaker'] = $id;
        $resource = Pic::findOrFail($request->pic_id);
        $resource->update($validateData3);

        $newData = [
            'speaker_id' => $id
        ];

        $data1 = array_merge($validateData1, [
            "id_speaker" => $id,
            // "no_speaker" => $nospeaker,
        ]);

        //menggabungkan 2 variabel
        $data2 = array_merge($validateData2, $newData);

            // dd($data1);
        //create post
        InventorySpeaker::create($data1);
        DetailSpeakerXPIC::create($data2);

        //balik
        return redirect('/inventory-speaker')->with('toast_success', 'Data Telah Ditambahkan');
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
        $id_speaker = str_replace('_', '/', $id);

        $hehe = [
            'data' => InventorySpeaker::findOrFail($id_speaker),
            'status' => Status::all(),
            'jenisPerangkat' => JenisPerangkat::all(),
            'merks' => Merk::all(),
            'vendor' => Vendor::all(),
            'workstation' => Workstation::all(),
            'detail' => DetailSpeakerXPIC::where('speaker_id', $id_speaker)->first(),
            'speakers' => InventorySpeaker::where('id_speaker', $id_speaker)->first(),
            'pic' => Pic::all(),
            'admin' => User::all(),
            'slug' => 'inventory',
        ];

        return view('main.inventory.speaker.edit-speaker', $hehe);
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
        $id_speaker = str_replace('_', '/', $id);

        $validateData1 = $request->validate([
            'id_speaker' => 'required',
            'model_speaker' => 'required',
            'merk_id' => 'required',
            'serial_number' => 'required',
            'jenisperangkat_id' => 'required',
            'admin' => 'required',
            'tanggal_input' => 'required',
            'status_id' => 'required',
            'keterangan' => 'required',
        ]);
        $validateData2 = $request->validate([
            // 'speaker_id' => 'required',
            'pic_id' => 'required',
            'vendor_id' => 'required',
            'workstation_id' => 'required',
        ]);

        $request->validate([
            'pic_id' => 'required',
            'id_speaker' => 'required',
        ]);
        $validateData3 = [
            'id_speaker' => $request->id_speaker,
        ];

        $existingPic = Pic::where('id_speaker', $id_speaker)->first();

        // Update or create the Pic record
        if ($existingPic) {
            // Update the existing Pic
            $existingPic->update(['id_speaker' => null]);
        } else {
        }

        //update post
        InventorySpeaker::where('id_speaker', $id_speaker)->update($validateData1);
        DetailSpeakerXPIC::where('speaker_id', $id_speaker)->update($validateData2);
        Pic::where('id', $request->pic_id)->update($validateData3);

        return redirect('/inventory-speaker/edit-speaker/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id_speaker = str_replace('_', '/', $id);
        $inventory = InventorySpeaker::findOrFail($id_speaker);
        $inventory->delete();

        return redirect('/inventory-speaker')->with('toast_warning', 'Data Telah Dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorevendorRequest;
use App\Http\Requests\UpdatevendorRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        'vendor' => Vendor::get(),
        'totalCount' => Vendor::count(),
        'slug' => 'utilities',
        ];
        return view('main.utilities.vendor.utilities-vendor', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'slug' => 'utilities',
        ];
        return view('main.utilities.vendor.tambah-vendor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'perusahaan' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'daerah' => 'required',
            'kode_pos' => 'required',
            'no_telpon' => 'required',
            'fax' => 'required',
            'tambahan' => 'required',
        ]);
        Vendor::create($validateData);
        return redirect('/utilities-vendor')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(vendor $vendor)
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
        $data = [
            'vendor' => Vendor::findOrFail($id),
            'slug' => 'utilities',
        ];
        return view('main.utilities.vendor.edit-vendor', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'perusahaan' => 'required',
            'jabatan' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'daerah' => 'required',
            'kode_pos' => 'required',
            'no_telpon' => 'required',
            'fax' => 'required',
            'tambahan' => 'required',
        ]);

        Vendor::where('id', $id)->update($validateData);
        return redirect('/utilities-vendor/edit-vendor/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vendor::destroy($id);
        return redirect('/utilities-vendor')->with('toast_success', 'Data Telah Dihapus');
    }
}
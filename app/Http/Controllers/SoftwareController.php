<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSoftwareRequest;
use App\Http\Requests\UpdateSoftwareRequest;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'software' => Software::get(),
            'totalCount' => Software::count(),
            'slug' => 'utilities',
        ];
        return view('main.utilities.software.utilities-software', $data);
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
        return view('main.utilities.software.tambah-software', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama_software' => 'required',
        ]);

        Software::create($validateData);
        return redirect('/utilities-software')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function show(Software $software)
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
            'software' => Software::find($id),
            'slug' => 'utilities',
        ];
        return view('main.utilities.software.edit-software', $data);
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
        $validateData = $request->validate([
            'nama_software' => 'required',
        ]);
        Software::where('id', $id)->update($validateData);
        return redirect('/utilities-software/edit-software/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Software::where($id)->delete();
        return redirect('/utilities-software')->with('toast_success', 'Data Telah Dihapus');
    }
}
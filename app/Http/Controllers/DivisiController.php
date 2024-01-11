<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoredivisiRequest;
use App\Http\Requests\UpdatedivisiRequest;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'divisi' => Divisi::get(),
            'totalCount' => Divisi::count(),
            'slug' => 'utilities',
        ];
        return view('main.utilities.div.utilities-div', $data);
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
        return view('main.utilities.div.tambah-div', $data);
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
            'divisi' => 'required',
            'keterangan' => 'required',
        ]);

        Divisi::create($validateData);
        return redirect('/utilities-div')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function show(divisi $divisi)
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
            'divisi' => Divisi::findOrFail($id),
            'slug' => 'utilities',
        ];
        return view('main.utilities.div.edit-div', $data);
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
            'divisi' => 'required',
            'keterangan' => 'required',
        ]);

        Divisi::where('id', $id)->update($validateData);
        return redirect('/utilities-div/edit-div/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Divisi::where($id)->delete();
        return redirect('/utilities-div')->with('toast_success', 'Data Telah Dihapus');
    }
}
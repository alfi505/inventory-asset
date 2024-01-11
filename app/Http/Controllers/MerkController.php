<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\UpdatemerkRequest;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        'merk' => Merk::get(),
        'totalCount' => Merk::count(),
        'slug' => 'utilities',
        ];
        return view('main.utilities.merk.utilities-merk', $data);
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

        return view('main.utilities.merk.tambah-merk', $data);
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
            'merk' => 'required',
            'keterangan' => 'required',
        ]);
        Merk::create($validateData);
        return redirect('/utilities-merk')->with('toast_success', 'Data Telah Ditambahkan');
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
        $data = [
            'merk' => Merk::findOrFail($id),
            'slug' => 'utilities',
        ];
        return view('main.utilities.merk.edit-merk', $data);
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
            'merk' => 'required',
            'keterangan' => 'required',
        ]);
        Merk::where('id', $id)->update($validateData);
        return redirect('/utilities-merk/edit-merk/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Merk::whereId($id)->delete();
        return redirect('/utilities-merk')->with('toast_success', 'Data Telah Dihapus');
    }
}
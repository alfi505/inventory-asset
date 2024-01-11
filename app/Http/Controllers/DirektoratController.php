<?php

namespace App\Http\Controllers;

use App\Models\Direktorat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdatedirektoratRequest;

class DirektoratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'direktorat' => direktorat::get(),
            'totalCount' => direktorat::count(),
            'slug' => 'utilities',
        ];
        return view('main.utilities.dir.utilities-dir', $data);
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
        return view('main.utilities.dir.tambah-dir', $data);
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
            'direktorat' => 'required',
            'keterangan' => 'required',
        ]);

        Direktorat::create($validateData);
        return redirect('/utilities-dir')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function show(direktorat $direktorat)
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
            'direktorat' => Direktorat::findOrFail($id),
            'slug' => 'utilities',
        ];
        return view('main.utilities.dir.edit-dir', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  int @id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'direktorat' => 'required',
            'keterangan' => 'required',
        ]);
        Direktorat::where('id', $id)->update($validateData);
        return redirect('/utilities-dir/edit-dir/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Direktorat::whereId($id)->delete();
        return redirect('/utilities-dir')->with('toast_success', 'Data Telah Dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreunitRequest;
use App\Http\Requests\UpdateunitRequest;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'unit' => Unit::get(),
            'totalCount' => Unit::count(),
            'slug' => 'utilities',
        ];
        return view('main.utilities.unit.utilities-unit', $data);
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
        return view('main.utilities.unit.tambah-unit', $data);
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
            'unit' => 'required',
            'keterangan' => 'required',
        ]);

        Unit::create($validateData);
        return redirect('/utilities-unit')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\unit  $unit
     * @return \Illuminate\Http\Response
     */
    public function show(unit $unit)
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
            'unit' => Unit::findOrFail($id),
            'slug' => 'utilities',
        ];
        return view('main.utilities.unit.edit-unit', $data);
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
            'unit' => 'required',
            'keterangan' => 'required',
        ]);
        Unit::where('id', $id)->update($validateData);
        return redirect('/utilities-unit/edit-unit/' . $id)->with('toast_success', 'Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unit::whereId($id)->delete();
        return redirect('/utilities-unit')->with('toast_success', 'Data Telah Dihapus');
    }
}
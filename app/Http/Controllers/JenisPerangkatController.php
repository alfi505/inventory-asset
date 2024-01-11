<?php

namespace App\Http\Controllers;

use App\Models\JenisPerangkat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\Updatejenis_perangkatRequest;

class JenisPerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
        'jenisPerangkat' => JenisPerangkat::get(),
        'totalCount' => JenisPerangkat::count(),
        'slug' => 'utilities',
        ];
        return view('main.utilities.jenisperangkat.utilities-jenisperangkat', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'jenisperangkat' =>  JenisPerangkat::all(),
            'slug' => 'utilities',
        ];

        return view('main.utilities.jenisperangkat.tambah-jenisperangkat', $data);
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
            'id_detail' => 'required',
            'jenisperangkat' => 'required',
            'keterangan' => 'required'
        ]);

        JenisPerangkat::create($validateData);

        return redirect('/utilities-jenisperangkat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jenis_perangkat  $jenis_perangkat
     * @return \Illuminate\Http\Response
     */
    public function show(jenis_perangkat $jenis_perangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jenis_perangkat  $jenis_perangkat
     * @return \Illuminate\Http\Response
     */
    public function edit(jenis_perangkat $jenis_perangkat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatejenis_perangkatRequest  $request
     * @param  \App\Models\jenis_perangkat  $jenis_perangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Updatejenis_perangkatRequest $request, jenis_perangkat $jenis_perangkat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jenis_perangkat  $jenis_perangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(jenis_perangkat $jenis_perangkat)
    {
        //
    }
}
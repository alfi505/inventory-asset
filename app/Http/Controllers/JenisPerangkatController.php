<?php

namespace App\Http\Controllers;

use App\Models\jenis_perangkat;
use Illuminate\Routing\Controller;
use App\Http\Requests\Storejenis_perangkatRequest;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storejenis_perangkatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storejenis_perangkatRequest $request)
    {
        //
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
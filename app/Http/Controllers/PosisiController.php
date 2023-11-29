<?php

namespace App\Http\Controllers;

use App\Models\posisi;
use App\Http\Requests\StoreposisiRequest;
use App\Http\Requests\UpdateposisiRequest;

class PosisiController extends Controller
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
     * @param  \App\Http\Requests\StoreposisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreposisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\posisi  $posisi
     * @return \Illuminate\Http\Response
     */
    public function show(posisi $posisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\posisi  $posisi
     * @return \Illuminate\Http\Response
     */
    public function edit(posisi $posisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateposisiRequest  $request
     * @param  \App\Models\posisi  $posisi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateposisiRequest $request, posisi $posisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\posisi  $posisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(posisi $posisi)
    {
        //
    }
}

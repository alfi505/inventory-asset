<?php

namespace App\Http\Controllers;

use App\Models\divisi;
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
     * @param  \App\Http\Requests\StoredivisiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredivisiRequest $request)
    {
        //
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
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function edit(divisi $divisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedivisiRequest  $request
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedivisiRequest $request, divisi $divisi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\divisi  $divisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(divisi $divisi)
    {
        //
    }
}

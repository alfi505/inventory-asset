<?php

namespace App\Http\Controllers;

use App\Models\merk;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoremerkRequest;
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
     * @param  \App\Http\Requests\StoremerkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremerkRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function show(merk $merk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function edit(merk $merk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemerkRequest  $request
     * @param  \App\Models\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemerkRequest $request, merk $merk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\merk  $merk
     * @return \Illuminate\Http\Response
     */
    public function destroy(merk $merk)
    {
        //
    }
}
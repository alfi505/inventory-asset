<?php

namespace App\Http\Controllers;

use App\Models\direktorat;
use App\Http\Requests\StoredirektoratRequest;
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
     * @param  \App\Http\Requests\StoredirektoratRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoredirektoratRequest $request)
    {
        //
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
     * @param  \App\Models\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function edit(direktorat $direktorat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatedirektoratRequest  $request
     * @param  \App\Models\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatedirektoratRequest $request, direktorat $direktorat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\direktorat  $direktorat
     * @return \Illuminate\Http\Response
     */
    public function destroy(direktorat $direktorat)
    {
        //
    }
}

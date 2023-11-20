<?php

namespace App\Http\Controllers;

use App\Models\inventory_speaker;
use App\Http\Requests\Storeinventory_speakerRequest;
use App\Http\Requests\Updateinventory_speakerRequest;

class InventorySpeakerController extends Controller
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
     * @param  \App\Http\Requests\Storeinventory_speakerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinventory_speakerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventory_speaker  $inventory_speaker
     * @return \Illuminate\Http\Response
     */
    public function show(inventory_speaker $inventory_speaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventory_speaker  $inventory_speaker
     * @return \Illuminate\Http\Response
     */
    public function edit(inventory_speaker $inventory_speaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinventory_speakerRequest  $request
     * @param  \App\Models\inventory_speaker  $inventory_speaker
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinventory_speakerRequest $request, inventory_speaker $inventory_speaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventory_speaker  $inventory_speaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory_speaker $inventory_speaker)
    {
        //
    }
}

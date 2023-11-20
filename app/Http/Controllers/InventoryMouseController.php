<?php

namespace App\Http\Controllers;

use App\Models\inventory_mouse;
use App\Http\Requests\Storeinventory_mouseRequest;
use App\Http\Requests\Updateinventory_mouseRequest;

class InventoryMouseController extends Controller
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
     * @param  \App\Http\Requests\Storeinventory_mouseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinventory_mouseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventory_mouse  $inventory_mouse
     * @return \Illuminate\Http\Response
     */
    public function show(inventory_mouse $inventory_mouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventory_mouse  $inventory_mouse
     * @return \Illuminate\Http\Response
     */
    public function edit(inventory_mouse $inventory_mouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinventory_mouseRequest  $request
     * @param  \App\Models\inventory_mouse  $inventory_mouse
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinventory_mouseRequest $request, inventory_mouse $inventory_mouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventory_mouse  $inventory_mouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory_mouse $inventory_mouse)
    {
        //
    }
}

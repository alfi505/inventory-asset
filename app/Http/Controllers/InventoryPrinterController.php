<?php

namespace App\Http\Controllers;

use App\Models\inventory_printer;
use App\Http\Requests\Storeinventory_printerRequest;
use App\Http\Requests\Updateinventory_printerRequest;

class InventoryPrinterController extends Controller
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
     * @param  \App\Http\Requests\Storeinventory_printerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinventory_printerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventory_printer  $inventory_printer
     * @return \Illuminate\Http\Response
     */
    public function show(inventory_printer $inventory_printer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventory_printer  $inventory_printer
     * @return \Illuminate\Http\Response
     */
    public function edit(inventory_printer $inventory_printer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinventory_printerRequest  $request
     * @param  \App\Models\inventory_printer  $inventory_printer
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinventory_printerRequest $request, inventory_printer $inventory_printer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventory_printer  $inventory_printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory_printer $inventory_printer)
    {
        //
    }
}

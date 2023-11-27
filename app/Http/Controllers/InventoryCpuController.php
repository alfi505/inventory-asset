<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Http\Requests\Storeinventory_cpuRequest;
use App\Http\Requests\Updateinventory_cpuRequest;
use App\Models\InventoryCpu;

class InventoryCpuController extends Controller
{
    public function index()
    {
        //
        $data = [
        'cpu' => InventoryCpu::get()
        ];

        return view('main.inventory.cpu.inventory-cpu', $data);
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
     * @param  \App\Http\Requests\Storeinventory_cpuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinventory_cpuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventory_cpu  $inventory_cpu
     * @return \Illuminate\Http\Response
     */
    public function show(inventory_cpu $inventory_cpu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventory_cpu  $inventory_cpu
     * @return \Illuminate\Http\Response
     */
    public function edit(inventory_cpu $inventory_cpu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinventory_cpuRequest  $request
     * @param  \App\Models\inventory_cpu  $inventory_cpu
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinventory_cpuRequest $request, inventory_cpu $inventory_cpu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventory_cpu  $inventory_cpu
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory_cpu $inventory_cpu)
    {
        //
    }
}

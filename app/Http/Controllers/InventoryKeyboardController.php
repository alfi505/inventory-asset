<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeinventory_keyboardRequest;
use App\Http\Requests\Updateinventory_keyboardRequest;
use App\Models\InventoryKeyboard;

class InventoryKeyboardController extends Controller
{
    public function index()
    {
        //
        $data =[
            'keyboards' => InventoryKeyboard::get()
        ];
        return view('main.inventory.monitor.detail-keyboard', $data);
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
     * @param  \App\Http\Requests\Storeinventory_keyboardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeinventory_keyboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventory_keyboard  $inventory_keyboard
     * @return \Illuminate\Http\Response
     */
    public function show(inventory_keyboard $inventory_keyboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventory_keyboard  $inventory_keyboard
     * @return \Illuminate\Http\Response
     */
    public function edit(inventory_keyboard $inventory_keyboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateinventory_keyboardRequest  $request
     * @param  \App\Models\inventory_keyboard  $inventory_keyboard
     * @return \Illuminate\Http\Response
     */
    public function update(Updateinventory_keyboardRequest $request, inventory_keyboard $inventory_keyboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventory_keyboard  $inventory_keyboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventory_keyboard $inventory_keyboard)
    {
        //
    }
}
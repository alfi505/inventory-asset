<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use App\Models\Status;
use App\Models\Vendor;
use App\Models\Workstation;
use Illuminate\Http\Request;
use App\Models\JenisPerangkat;
use App\Models\InventoryKeyboard;
use Illuminate\Routing\Controller;
use App\Http\Requests\Storeinventory_keyboardRequest;
use App\Http\Requests\Updateinventory_keyboardRequest;

class InventoryKeyboardController extends Controller
{
    public function index()
    {
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        $data =[
            'keyboards' => InventoryKeyboard::get()
        ];
        return view('main.inventory.keyboard.inventory-keyboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = Status::all();
        $jenisPerangkat = JenisPerangkat::all();
        $merk = Merk::all();
        $vendor = Vendor::all();
        $workstation = Workstation::all();
        return view('main.inventory.keyboard.tambah-keyboard', compact('status','jenisPerangkat','merk', 'vendor', 'workstation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
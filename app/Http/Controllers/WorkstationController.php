<?php

namespace App\Http\Controllers;

use App\Models\Workstation;
use Illuminate\Routing\Controller;
use App\Http\Requests\Storeno_ipRequest;
use App\Http\Requests\Updateno_ipRequest;

class WorkstationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.pic.workstation.data-workstation');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

        $id_monitor = str_replace('_', '/', $id);
        $data = [
            'workstation' => Workstation::where('id', $id)->first(),
            'slug' => 'pic',
        ];

        return view('main.pic.workstation.detail-workstation', $data);
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
     * @param  \App\Http\Requests\Storeno_ipRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeno_ipRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\no_ip  $no_ip
     * @return \Illuminate\Http\Response
     */
    public function show(no_ip $no_ip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\no_ip  $no_ip
     * @return \Illuminate\Http\Response
     */
    public function edit(no_ip $no_ip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateno_ipRequest  $request
     * @param  \App\Models\no_ip  $no_ip
     * @return \Illuminate\Http\Response
     */
    public function update(Updateno_ipRequest $request, no_ip $no_ip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\no_ip  $no_ip
     * @return \Illuminate\Http\Response
     */
    public function destroy(no_ip $no_ip)
    {
        //
    }
}
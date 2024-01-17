<?php

namespace App\Http\Controllers;

use App\Models\Workstation;
use Illuminate\Http\Request;
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

        $data = [
            'workstation' => Workstation::all(),
            'totalCount' => Workstation::count(),
            'slug' => 'pic',
        ];
        return view('main.pic.workstation.data-workstation', $data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){

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
        $data = [
            'slug' => 'pic',
        ];
        return view('main.pic.workstation.tambah-workstation', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'no_ip_address' => 'required',
        ]);
        Workstation::create($validateData);
        return redirect('/workstation')->with('toast_success', 'Data Telah Ditambahkan');
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Workstation::destroy($id);
        return redirect('/workstation')->with('toast_success', 'Data Telah Dihapus');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use App\Models\Workstation;
use Illuminate\Http\Request;
use App\Models\DetailCpuXPIC;
use Illuminate\Routing\Controller;
use App\Http\Requests\UpdatepicRequest;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'pic' => Pic::all(),
            'totalCount' => Pic::count(),
            'slug' => 'pic',
        ];
        return view('main.pic.data-pic', $data);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function detail($id){
        $data = [
            'pic' => Pic::where('id', $id)->first(),
            'detail' => DetailCpuXPIC::where('pic_id', $id)->first(),
            'slug' => 'pic',
        ];
        // dd($data);
        return view('main.pic.detail-pic', $data);
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
        return view('main.pic.tambah-pic', $data);
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
            'nama_pic' => 'required',
            'posisi_id' => 'required',
        ]);

        Pic::create($validateData);

        return redirect('/data-pic')->with('toast_success', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function show(pic $pic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function edit(pic $pic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepicRequest  $request
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepicRequest $request, pic $pic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pic = Pic::findOrFail($id);
        $pic->delete();
        return redirect('/data-pic')->with('toast_success', 'Data Telah Dihapus');
    }
}
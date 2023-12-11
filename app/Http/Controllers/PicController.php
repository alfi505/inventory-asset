<?php

namespace App\Http\Controllers;

use App\Models\Pic;
use Illuminate\Routing\Controller;
use App\Http\Requests\UpdatepicRequest;
use Illuminate\Http\Request;

class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('main.pic.data-pic');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.pic.tambah-pic');
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
        ]);

        Pic::create($validateData);

        return redirect('/data-pic');
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
     * @param  \App\Models\pic  $pic
     * @return \Illuminate\Http\Response
     */
    public function destroy(pic $pic)
    {
        //
    }
}
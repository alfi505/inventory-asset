<?php

namespace App\Http\Controllers;

use App\Models\pic;
use Illuminate\Routing\Controller;
use App\Http\Requests\StorepicRequest;
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
     * @param  \App\Http\Requests\StorepicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepicRequest $request)
    {
        //
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
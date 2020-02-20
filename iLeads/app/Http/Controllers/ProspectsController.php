<?php

namespace App\Http\Controllers;

use App\Prospects;
use Illuminate\Http\Request;

class ProspectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('prospects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prospects/create');
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
     * @param  \App\Prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function show(Prospects $prospects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function edit(Prospects $prospects)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prospects $prospects)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prospects  $prospects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prospects $prospects)
    {
        //
    }
}

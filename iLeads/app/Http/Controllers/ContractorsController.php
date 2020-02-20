<?php

namespace App\Http\Controllers;

use App\Contractors;
use Illuminate\Http\Request;

class ContractorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contractors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contractors.create');
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
     * @param  \App\Contractors  $contractors
     * @return \Illuminate\Http\Response
     */
    public function show(Contractors $contractors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contractors  $contractors
     * @return \Illuminate\Http\Response
     */
    public function edit(Contractors $contractors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contractors  $contractors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contractors $contractors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contractors  $contractors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contractors $contractors)
    {
        //
    }
}

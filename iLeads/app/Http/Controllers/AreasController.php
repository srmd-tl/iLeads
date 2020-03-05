<?php

namespace App\Http\Controllers;

use App\Area;
use App\DataTables\AreaDataTable;
use App\Http\Requests\AreaRequest;
use App\Repositories\AreaRepositoryEloquent;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    /**
     * @var AreaRepository
     */
    protected $repository;

    public function __construct(AreaRepositoryEloquent $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AreaDataTable $dataTable)
    {
        return $dataTable->render('areas.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
        $this->repository->create($request->only('name'));
        return redirect()->route('areas.index')->withSuccess('Area Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        //
        return view('areas.view', ["area" => $area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, $id)
    {
        $this->repository->update($request->only('name'), $id);
        return redirect()->route('areas.index')->withSuccess('Area Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areas $areas)
    {
        $this->repository->delete($request->only('name'));
        return back()->withSuccess('Area Deleted');
    }
}

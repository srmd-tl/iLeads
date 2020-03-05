<?php

namespace App\Http\Controllers;

use App\Contractors;
use App\DataTables\ContractorsDataTable;
use App\Http\Requests\ContractorRequest;
use App\Repositories\AreaRepositoryEloquent;
use App\Repositories\ContractorRepository;
use Illuminate\Http\Request;

class ContractorsController extends Controller
{
    private $contractorRepository;
    private $areaRepository;
    public function __construct(ContractorRepository $contractorRepository, AreaRepositoryEloquent $areaRepository)
    {
        $this->contractorsRepository = $contractorRepository;
        $this->areaRepository        = $areaRepository;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ContractorsDataTable $dataTable)
    {

        return $dataTable->render('contractors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = $this->areaRepository->all();
        return view('contractors.create', ["areas" => $areas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractorRequest $request)
    {
        $data = $request->merge(['user_id' => auth()->user()->id]);
        $this->contractorsRepository->store($data->except('areas'), $request->areas);
        return redirect()->route('contractors.index')->with('success', 'A new contractor added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contractors  $contractor
     * @return \Illuminate\Http\Response
     */
    public function show(Contractors $contractor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contractors  $contractor
     * @return \Illuminate\Http\Response
     */
    public function edit(Contractors $contractor)
    {
        $areas           = $this->areaRepository->all();
        $contractorAreas = $contractor->areas->pluck('id')->toArray();
        return view('contractors.view', ["contractor" => $contractor, "areas" => $areas,"contractorAreas"=>$contractorAreas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$request->except('csrf_token','areas');
        $this->contractorsRepository->update($data, $id,$request->areas);
        return redirect()->route('contractors.index')->with('success', 'Contractor Info updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->contractorsRepository->delete($id);
        return redirect()->route('contractors.index')->with('success', 'Contractor Deleted!');

    }
}

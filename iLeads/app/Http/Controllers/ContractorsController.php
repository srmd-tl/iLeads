<?php

namespace App\Http\Controllers;

use App\Contractors;
use App\DataTables\ContractorsDataTable;
use App\Repositories\ContractorRepository;
use Illuminate\Http\Request;
use App\Http\Requests\ContractorRequest;
class ContractorsController extends Controller
{
    private $contractorRepository;
    public function __construct(ContractorRepository $contractorRepository)
    {
        $this->contractorsRepository = $contractorRepository;

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
        return view('contractors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractorRequest $request)
    {
        $this->contractorsRepository->store($request->merge(['user_id' => auth()->user()->id])->all());
        return redirect()->route('contractors.index')->with('success','A new contractor added!');
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
        //
        return view('contractors.view', ["contractor" => $contractor]);
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
        $this->contractorsRepository->update($request->all(),$id);
        return redirect()->route('contractors.index')->with('success','Contractor Info updated!');

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
        return redirect()->route('contractors.index')->with('success','Contractor Deleted!');
        
    }
}

<?php

namespace App\Repositories;

use App\Contractors;
use Config;

class ContractorRepository
{
    //
    /*Return All Contractors*/
    public function all($page = null)
    {
        return
        auth()->user()->isAdmin()?
        Contractors::paginate($page) :
        auth()->user()->contractors()->paginate($page)
        ;
    }

    /**
     *Create new Contractors*
     *
     * @var array
     */
    public function store($data)
    {
        return Contractors::create($data);

    }

    /**
     *Show a Contractors*
     *
     * @var array
     */
    public function show($id)
    {
        return Contractors::findOrFail($id);
    }

    /**
     * Update Contractors*
     *
     * @var array
     */
    public function update($data, $id)
    {
        $contractors = self::show($id);
        if (auth()->user()->id == $contractors->user->id) {
            return $contractors->update($data);

        }
        return false;
    }

    /**
     * Delete Contractors*
     *
     * @var id
     */
    public function delete($id)
    {
        return Contractors::find($id)->delete();
    }

}

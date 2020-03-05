<?php

namespace App\Repositories;

use App\Contractors;

class ContractorRepository
{
    //
    /*Return All Contractors*/
    public function all($page = null)
    {
        return
        auth()->user()->isAdmin() ?
        Contractors::paginate($page) :
        auth()->user()->contractors()->paginate($page)
        ;
    }

    /**
     *Create new Contractors*
     *
     * @var array
     */
    public function store($data, $attachment)
    {
        $contractor = Contractors::create($data);
        $contractor->areas()->attach($attachment);
        return $contractor;

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
    public function update($data, $id, $sync)
    {
        $contractor = self::show($id);
        if (auth()->user()->id == $contractor->user->id) {
            $contractor->areas()->sync($sync);
            return $contractor->update($data);

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

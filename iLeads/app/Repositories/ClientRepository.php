<?php

namespace App\Repositories;

use App\Contractors;
use Config;

class ContractorsRepository
{
    //
    /*Return All Clients*/
    public function all($page = null)
    {
        return
        auth()->user()->role == Config::get('constants.options.admin') ?
        Contractors::paginate($page) :
        auth()->user()->contractors()->paginate($page)
        ;
    }

    /**
     *Create new Client*
     *
     * @var array
     */
    public function store($data)
    {
        return Client::create($data);

    }

    /**
     *Show a Client*
     *
     * @var array
     */
    public function show($id)
    {
        return Client::findOrFail($id);
    }

    /**
     * Update Client*
     *
     * @var array
     */
    public function update($data, $id)
    {
        $Client = self::show($id);
        if (auth()->user()->id == $Client->user->id) {
            return $Client->update($data);

        }
        return false;
    }

    /**
     * Delete Client*
     *
     * @var id
     */
    public function delete($id)
    {
        return Client::find($id)->delete();
    }

}

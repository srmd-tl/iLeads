<?php

namespace App\Repositories;

use App\User;
use Config;

class UserRepository
{
    //
    /*Return All users*/
    public function all($page)
    {
        $user;
        if (auth()->user()->role == Config::get('constants.options.admin')) {
            $user = User::paginate($page);
        } else {
            $user = collect();
        }

        return $user;

    }

    /**
     *Create new user*
     *
     * @var array
     */
    public function store($data)
    {
        return User::create($data);

    }

    /**
     *Show a user*
     *
     * @var array
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Update User*
     *
     * @param App\User $user
     * @param Request $data
     */
    public function update($user,$data)
    {
      
        return $user->update($data);
    }

    /**
     * Hard Delete User*
     *
     * @var id
     */
    public function delete($id)
    {
        return User::find($id)->forceDelete();
    }
    /**
     * Get user  subscriptions
     * @param userId
     *
     */
    public function userSubscriptions($userId)
    {
        return User::withTrashed()->find($userId)->subscriptions;

    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractors extends Model
{
    //
    /**
     * The attributes that are guarded
     *
     *
     */

    protected $guarded = [];
    //Relations

    /**
     *  Belongs To User
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

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
    /**
     *  Belongs TO Many Areas
     *
     */
    public function areas()
    {
        return $this->belongsToMany(Area::class, 'area_contractors', 'contractor_id', 'area_id');
    }

}

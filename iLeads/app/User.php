<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','business_name','business_site','phone','role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     *Cast To Carbon Object
     **/
    protected $dates = ["created_at"];

    /*Accessor*/
    public function getNameAttribute()
    {
        return ucfirst($this->attributes['name']);
    }
  

    /**
     *   Relations
     *
     **/

    public function contractors()
    {
        return $this->hasMany('App\Contractors');
    }

}

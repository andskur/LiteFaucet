<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'refferal_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];


    public function wallet()
    {
        return $this->hasOne('App\Wallet', 'user_id', 'id');
    }


    public function refferal()
    {
        return $this->hasOne('App\User', 'id', 'refferal_id');
    }
}

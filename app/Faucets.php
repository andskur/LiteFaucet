<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faucets extends Model
{

    protected $table = 'faucets';

    protected $fillable = [
        'name',
        'link',
    ];
}

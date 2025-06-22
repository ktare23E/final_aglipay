<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Priest extends Model
{
    //

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'position',
        'dob',
        'status'
    ];
}

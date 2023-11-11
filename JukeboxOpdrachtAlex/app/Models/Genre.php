<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'id', 'Game'
    ]; 

    protected $casts = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

}



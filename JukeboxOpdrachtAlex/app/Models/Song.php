<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'Naam', 'id', 'Artiest_Band', 'Duur', 'genre_id'
    ]; 

    protected $casts = [

        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }
    
}

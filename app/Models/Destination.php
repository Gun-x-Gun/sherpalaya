<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $fillable =[
        // 'images',
        'name',
        'description',
    ];

    public function treks()
    {
        return $this->belongsToMany(
            Trek::class,
            'destination_trek'
        )->using(DestinationTrek::class);
    }
}

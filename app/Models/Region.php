<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{


   protected $fillable = [
        'name',
   ];

   public function destinations()
    {
        return $this->hasMany(Destination::class);
    }
   public function treks()
    {
        return $this->hasMany(Trek::class);
    }
}

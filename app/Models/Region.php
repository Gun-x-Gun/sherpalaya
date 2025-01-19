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
   public function tours()
    {
        return $this->hasMany(Tour::class);
    }
   public function peaks()
    {
        return $this->hasMany(Peak::class);
    }
   public function expeditions()
    {
        return $this->hasMany(Expedition::class);
    }
}

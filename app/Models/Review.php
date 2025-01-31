<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description',
        'display_in_home_page',
    ];

    protected function casts(){
        return [
            'display_in_home_page' => 'boolean'
        ];
    }
}

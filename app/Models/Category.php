<?php

namespace App\Models;

use App\Enums\CategoryTypes;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;


    protected $fillable = [
        'name',
        'type',
    ];
    protected $casts = [
        'type' => CategoryTypes::class
    ];

    public $translatable = [
        'name',
    ];
}

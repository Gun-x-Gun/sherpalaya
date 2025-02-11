<?php

namespace App\Models;

use App\Enums\CategoryTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasTranslations;


    protected $fillable = [
        'name',
        'type',
        'order',
    ];
    protected $casts = [
        'type' => CategoryTypes::class
    ];

    public $translatable = [
        'name',
    ];

    public function items(): HasMany
    {
        return match ($this->type) {
            CategoryTypes::EXPEDITION => $this->hasMany(Expedition::class),
            CategoryTypes::TREK => $this->hasMany(Trek::class),
            CategoryTypes::TOUR => $this->hasMany(Tour::class),
            default => null,
        };
    }
}

<?php

namespace App\Models;

use App\Enums\ItineraryTypes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Itinerary extends Model
{
    protected $fillable =[
        'trek_id',
        'title',
        'type',
        'description',
    ];

    protected $casts = [
        'type' => ItineraryTypes::class,
    ];

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }
}

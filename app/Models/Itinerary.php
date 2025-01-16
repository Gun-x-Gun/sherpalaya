<?php

namespace App\Models;

use App\Enums\ItineraryTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable =[
        'title',
        'itinerable_id',
        'itinerable_type',
    ];

    protected $casts = [
        // 'type' => ItineraryTypes::class,
    ];

    public function itinerable(): MorphTo
    {
        return $this->morphTo();
    }
    public function itineraryDetails()
    {
        return $this->hasMany(ItineraryDetail::class);
    }
    public function destinations()
    {
        return $this->belongsToMany(
            Destination::class,
            'destination_itinerary'
        )->using(DestinationItinerary::class)
            ->withPivot([
                'order'
            ]);
    }
}

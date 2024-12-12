<?php

namespace App\Models;

use App\Enums\ItineraryTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItineraryDetail extends Model
{
    use HasFactory;

    protected $fillable =[
        'itinerary_id',
        'type',
        'description'
    ];

    protected $casts = [
        'type' => ItineraryTypes::class,
    ];

    public function itinerary()
    {
        return $this->belongsTo(Itinerary::class);
    }
}

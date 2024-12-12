<?php

namespace App\Models;

use App\Enums\ItineraryTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable =[
        'trek_id',
        'title',
    ];

    protected $casts = [
        // 'type' => ItineraryTypes::class,
    ];

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }
    public function itineraryDetails()
    {
        return $this->hasMany(ItineraryDetail::class);
    }
}

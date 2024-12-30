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
        'tour_id',
        'expedition_id',
        'peak_id',
        'title',
    ];

    protected $casts = [
        // 'type' => ItineraryTypes::class,
    ];

    public function trek()
    {
        return $this->belongsTo(Trek::class);
    }
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
    public function expedition()
    {
        return $this->belongsTo(Expedition::class);
    }
    public function peak()
    {
        return $this->belongsTo(Peak::class);
    }
    public function itineraryDetails()
    {
        return $this->hasMany(ItineraryDetail::class);
    }
}

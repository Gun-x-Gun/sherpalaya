<?php

namespace App\Models;

use App\Enums\TrekDifficulty;
use Illuminate\Database\Eloquent\Model;

class Trek extends Model
{
    protected $fillable = [
        'title',
        'cover_image',
        // 'extra_images',
        'description',
        //trek details
        'duration',
        'grade', //rating out of 10
        'destinations',
        'starting_ending_point',
        'best_time_for_trek',
        'starting_altitude',
        'highest_altitude',
        //secondary data
        'trek_difficulty',
        'key_highlights',
    ];

    protected $casts = [
        'trek_difficulty' => TrekDifficulty::class,
    ];
    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }
}

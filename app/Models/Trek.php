<?php

namespace App\Models;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Trek extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'cover_image_id',
        'feature_image_id',
        'media_trek',
        // 'extra_images',
        'description',
        //trek details
        'duration',
        'grade', //rating out of 10
        // 'destinations',
        'starting_ending_point',
        'best_time_for_trek',
        'starting_altitude',
        'highest_altitude',
        //secondary data
        'trek_difficulty',
        'key_highlights',
        'costs_include',
        'costs_exclude',
        'essential_tips',
        'is_featured',
    ];

    protected $casts = [
        'trek_difficulty' => TrekDifficulty::class,
        'costs_exclude' => 'array',
        'costs_include' => 'array',
        'key_highlights' => 'array',
        'essential_tips' => 'array',
    ];

    // Relationships

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }
    public function destinations()
    {
        return $this->belongsToMany(
            Destination::class,
            'destination_trek'
        )->using(DestinationTrek::class)
            ->withPivot([
                'order'
            ]);
    }

    public function coverImage(): BelongsTo
    {
        return CuratorModelHelper::belongsTo($this, 'cover_image_id');
    }

    public function featureImage(): BelongsTo
    {
        return CuratorModelHelper::belongsTo($this, 'feature_image_id');
    }

    public function images(): BelongsToMany
    {
        return CuratorModelHelper::belongsToMany($this, 'media_trek', 'trek_id');
    }
}

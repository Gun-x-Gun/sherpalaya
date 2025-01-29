<?php

namespace App\Models;

use App\Enums\TrekDifficulty;
use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Scout\Searchable;

class Peak extends Model
{
    use HasFactory;
    use Searchable;


    protected $fillable = [
        'title',
        'cover_image_id',
        'feature_image_id',
        'region_id',
        'description',
        'duration',
        'grade',
        'is_featured',
        'starting_point',
        'ending_point',
        'best_time_for_peak',
        'starting_altitude',
        'highest_altitude',
        'peak_difficulty',
        'key_highlights',
        'costs_include',
        'costs_exclude',
        'essential_tips',
    ];

    protected $casts = [
        'peak_difficulty' => TrekDifficulty::class,
        'costs_exclude' => 'array',
        'costs_include' => 'array',
        'key_highlights' => 'array',
        'essential_tips' => 'array',
    ];

    public function itineraries(): MorphMany
    {
        return $this->morphMany(Itinerary::class, 'itinerable');
    }
    public function destinations()
    {
        return $this->belongsToMany(
            Destination::class,
            'destination_peak'
        )->using(DestinationPeak::class)
            ->withPivot([
                'order'
            ]);
    }

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
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
        return CuratorModelHelper::belongsToMany($this, 'media_peak', 'peak_id');
    }
}

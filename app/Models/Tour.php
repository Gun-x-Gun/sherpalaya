<?php

namespace App\Models;

use App\Enums\TourType;
use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Laravel\Scout\Searchable;

class Tour extends Model
{
    use HasFactory;
    use Searchable;


    protected $fillable = [
        'cover_image_id',
        'feature_image_id',
        'description',
        'title',
        'type',
        'is_featured',
        'duration',
        'grade',
        'starting_ending_point',
        'best_time_for_tour',
        'key_highlights',
        'costs_include',
        'costs_exclude',
        'essential_tips',
    ];
    protected $casts = [
        'type' => TourType::class,
        'costs_exclude' => 'array',
        'costs_include' => 'array',
        'key_highlights' => 'array',
        'essential_tips' => 'array',
    ];

    // RELATIONSHIPS
    public function itineraries(): MorphMany
    {
        return $this->morphMany(Itinerary::class, 'itinerable');
    }

    public function destinations()
    {
        return $this->belongsToMany(
            Destination::class,
            'destination_tour'
        )->using(DestinationTour::class)
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
        return CuratorModelHelper::belongsToMany($this, 'media_tour', 'tour_id');
    }
}

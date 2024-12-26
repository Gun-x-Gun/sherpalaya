<?php

namespace App\Models;

use App\Enums\TourType;
use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tour extends Model
{
    protected $fillable = [
        'cover_image_id',
        'feature_image_id',
        'media_tour',
        'description',
        'title',
        'type',
        'is_featured',
    ];
    protected $casts = [
        'type' => TourType::class,
    ];

// RELATIONSHIPS
    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
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

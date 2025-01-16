<?php

namespace App\Models;

use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Peak extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image_id',
        'feature_image_id',
        'media_peak',
        'description',
    ];

    protected $casts = [
        //
    ];

    public function itineraries():MorphMany
    {
        return $this->morphMany(Itinerary::class,'itinerable');
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
        return CuratorModelHelper::belongsToMany($this, 'media_peak', 'expedition_id');
    }
}

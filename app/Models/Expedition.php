<?php

namespace App\Models;

use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Expedition extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image_id',
        'feature_image_id',
        'expedition_media',
        'description',
    ];

    protected $casts = [
        //
    ];

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class);
    }
    public function destinations()
    {
        return $this->belongsToMany(
            Destination::class,
            'destination_expedition'
        )->using(DestinationExpedition::class)
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
        return CuratorModelHelper::belongsToMany($this, 'expedition_media', 'expedition_id');
    }

}

<?php

namespace App\Models;

use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Service extends Model
{
    protected $fillable=[
        'title',
        'description',
        'cover_image_id',
        'location',
    ];
    protected $casts = [
        'location' => 'array',
    ];

    public function destinations()
    {
        return $this->belongsToMany(
            Destination::class,
            'destination_service'
        )->using(DestinationService::class)
            ->withPivot([
                'order'
            ]);
    }
    public function coverImage(): BelongsTo
    {
        return CuratorModelHelper::belongsTo($this, 'cover_image_id');
    }
    public function images(): BelongsToMany
    {
        return CuratorModelHelper::belongsToMany($this, 'media_service', 'service_id');
    }
}

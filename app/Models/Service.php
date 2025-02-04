<?php

namespace App\Models;

use App\Contracts\CanBeEasySearched;
use App\Contracts\CanBeInquiried;
use App\Enums\SearchType;
use App\Helpers\CuratorModelHelper;
use App\Traits\EasySearch;
use App\Traits\HasInquiries;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

class Service extends Model implements CanBeEasySearched, CanBeInquiried
{
    use EasySearch;
    use HasInquiries;

    protected $fillable = [
        'title',
        'description',
        'cover_image_id',
        'location',
        // is_active
    ];
    protected $casts = [
        'location' => 'array',
        'is_active' => 'boolean',
    ];

    // Easy Search

    public function searchType(): SearchType
    {
        return SearchType::SERVICE;
    }


    public function searchResultTitle(): string
    {
        return $this->title;
    }

    public function searchResultUrl(): string
    {
        return $this->title;
    }

    public function searchResultImages(): Collection
    {
        $this->loadMissing('images');
        return $this->images;
    }

    // RELATIONSHIPS

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

<?php

namespace App\Models;

use App\Contracts\CanBeEasySearched;
use App\Contracts\CanBeInquiried;
use App\Enums\SearchType;
use App\Enums\TourType;
use App\Helpers\CuratorModelHelper;
use App\Traits\EasySearch;
use App\Traits\HasInquiries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Collection;
use Spatie\Translatable\HasTranslations;


class Tour extends Model implements CanBeEasySearched, CanBeInquiried
{
    use EasySearch;
    use HasFactory;
    use HasInquiries;
    use HasTranslations;
    protected $fillable = [
        'cover_image_id',
        'feature_image_id',
        'title',
        'description',
        'type',
        'duration',
        'grade',
        'starting_point',
        'ending_point',
        'best_time_for_tour',
        'costs_include',
        'costs_exclude',
        'is_featured',
    ];
    protected $casts = [
        'type' => TourType::class,
        'costs_exclude' => 'array',
        'costs_include' => 'array',
    ];

    public $translatable = [
        'title',
        'description',
        'best_time_for_tour',
        'costs_include',
        'costs_exclude',
    ];

    // Easy Search

    public function searchType(): SearchType
    {
        return SearchType::TOUR;
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
    public function itineraries(): MorphMany
    {
        return $this->morphMany(Itinerary::class, 'itinerable');
    }
    public function keyHighlights():MorphMany
    {
        return $this->morphMany(KeyHighlight::class,'highlightable');
    }

    public function essentialTips():MorphMany
    {
        return $this->morphMany(EssentialTip::class,'tippable');
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
    public function sherpas()
    {
        return $this->belongsToMany(
            OurSherpa::class,
            'our_sherpa_tour'
        )->using(OurSherpaTour::class)
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

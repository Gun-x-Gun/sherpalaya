<?php

namespace App\Models;

use App\Filament\Resources\DestinationResource\Widgets\DestinationServiceTable;
use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Destination extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable =[
        'name',
        'description',
        'region_id',
        'location',
    ];

    protected $casts = [
        'location' => 'array',
    ];

// RELATIONSHIPS
    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function itinerary()
    {
        return $this->belongsTo(Region::class);
    }

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(
            Service::class,
        'destination_service'
        )->using(DestinationService::class)
        ->withPivot([
            'order'
        ]);
    }

    public function treks()
    {
        return $this->belongsToMany(
            Trek::class,
            'destination_trek'
        )->using(DestinationTrek::class)
        ->withPivot([
            'order'
        ]);
    }
    public function tours()
    {
        return $this->belongsToMany(
            Tour::class,
            'destination_tour'
        )->using(DestinationTour::class)
        ->withPivot([
            'order'
        ]);
    }

    public function destinationImages(): BelongsToMany
    {
        return CuratorModelHelper::belongsToMany($this, 'destination_media', 'destination_id');
    }
}

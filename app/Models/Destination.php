<?php

namespace App\Models;

use App\Helpers\CuratorModelHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Destination extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'location',
    ];

    protected $casts = [
        'location' => 'array',
    ];

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

    public function destinationImages(): BelongsToMany
    {
        return CuratorModelHelper::belongsToMany($this, 'destination_media', 'destination_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DestinationPeak extends Pivot
{
    protected $fillable = [
        'destination_id',
        'tour_id',
        'order'
    ];
}

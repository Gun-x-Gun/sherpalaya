<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class OurSherpaPeak extends Pivot
{
    protected $fillable = [
        'our_sherpa_id',
        'peak_id',
        'order'
    ];
}

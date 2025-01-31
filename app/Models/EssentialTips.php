<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class EssentialTips extends Model
{
    protected $fillable = [
        'tippable_id',
        'tippable_type',
        'title',
        'description',
    ];
    public function tippable(): MorphTo
    {
        return $this->morphTo();
    }
}

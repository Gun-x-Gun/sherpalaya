<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class KeyHighlights extends Model
{
    protected $fillable = [
        'highlightable_id',
        'highlightable_type',
        'title',
        'description',
    ];

    public function highlightable(): MorphTo
    {
        return $this->morphTo();
    }
}

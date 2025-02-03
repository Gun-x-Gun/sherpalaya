<?php

namespace App\Traits;

use App\Models\Inquiry;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasInquiries
{
    public function inquiries(): MorphMany
    {
        return $this->morphMany(Inquiry::class, 'inquiriable');
    }
}

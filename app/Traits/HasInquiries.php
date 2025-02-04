<?php

namespace App\Traits;

use App\Models\Inquiry;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasInquiries
{
    public function inquiries(): MorphMany
    {
        return $this->morphMany(Inquiry::class, 'inquiriable');
    }

    public function getWhatsappUrl(): string
    {
        return "https://wa.me/9779860435510?" . http_build_query([
            'text' => "Hey there! I am contacting for a package listed on your website at: " . $this->getUrl(),
        ]);
    }

    public function getUrl(): string
    {
        $resourceName = strtolower(
            Arr::last(
                explode(
                    '\\',
                    get_class($this)
                )
            )
        );
        return  config('app.url') . '/' . Str::plural($resourceName) . '/' . $this->id;
    }
}

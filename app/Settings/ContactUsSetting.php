<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactUsSetting extends Settings
{
    public ?string $content_en;
    public ?string $content_fr;
    public ?string $address_en;
    public ?string $address_fr;
    public ?string $contact_en;
    public ?string $contact_fr;
    public ?string $working_hour_en;
    public ?string $working_hour_fr;

    public static function group(): string
    {
        return 'contact_us';
    }
}

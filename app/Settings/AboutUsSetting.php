<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutUsSetting extends Settings
{

    public ?string $cover_image_id;
    public ?string $content_en;
    public ?string $content_fr;
    public ?array $certificate_images;

    public static function group(): string
    {
        return 'about_us';
    }
}

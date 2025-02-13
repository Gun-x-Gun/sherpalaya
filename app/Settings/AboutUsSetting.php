<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class AboutUsSetting extends Settings
{

    public ?string $about_us_page_cover_image_id;
    public ?string $about_us_page_content;
    public ?string $certificate_images;


    public static function group(): string
    {
        return 'about_us';
    }
}

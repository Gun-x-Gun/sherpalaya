<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class PageSetting extends Settings
{
    public ?string $expedition_page_cover_image_id;
    public ?string $expedition_page_content_en;
    public ?string $expedition_page_content_fr;

    public ?string $trek_page_cover_image_id;
    public ?string $trek_page_content_en;
    public ?string $trek_page_content_fr;

    public ?string $tour_page_cover_image_id;
    public ?string $tour_page_content_en;
    public ?string $tour_page_content_fr;

    public ?string $peak_page_cover_image_id;
    public ?string $peak_page_content_en;
    public ?string $peak_page_content_fr;

    public ?string $service_page_cover_image_id;
    public ?string $service_page_content_en;
    public ?string $service_page_content_fr;



    public static function group(): string
    {
        return 'page';
    }
}

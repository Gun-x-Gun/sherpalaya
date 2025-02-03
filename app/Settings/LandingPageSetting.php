<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class LandingPageSetting extends Settings
{

    // Activity

    public ?string $expedition_activity_image_id;
    public ?string $expedition_activity_content;
    public ?string $expedition_activity_count;

    public ?string $trek_activity_image_id;
    public ?string $trek_activity_content;
    public ?string $trek_activity_count;

    public ?string $tour_activity_image_id;
    public ?string $tour_activity_content;
    public ?string $tour_activity_count;

    public ?string $peak_activity_image_id;
    public ?string $peak_activity_content;
    public ?string $peak_activity_count;

    // Stat
    public ?string $traveller_count;
    public ?string $association_count;
    public ?string $customer_feedback;
    public ?string $success_rate;


    public static function group(): string
    {
        return 'landing_page';
    }
}

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
    public ?string $stat_traveller_count;
    public ?string $stat_association_count;
    public ?string $stat_customer_feedback;
    public ?string $stat_success_rate;

    public ?string $parallax_image_id;
    public ?string $parallax_sound_id;


    public static function group(): string
    {
        return 'landing_page';
    }
}

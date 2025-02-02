<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('landing_page.expedition_activity_image_id', null);
        $this->migrator->add('landing_page.expedition_activity_content', null);

        $this->migrator->add('landing_page.trek_activity_image_id', null);
        $this->migrator->add('landing_page.trek_activity_content', null);

        $this->migrator->add('landing_page.tour_activity_image_id', null);
        $this->migrator->add('landing_page.tour_activity_content', null);

        $this->migrator->add('landing_page.peak_activity_image_id', null);
        $this->migrator->add('landing_page.peak_activity_content', null);

        $this->migrator->add('landing_page.traveller_count', null);
        $this->migrator->add('landing_page.association_count', null);
        $this->migrator->add('landing_page.customer_feedback', null);
        $this->migrator->add('landing_page.success_rate', null);

    }
};

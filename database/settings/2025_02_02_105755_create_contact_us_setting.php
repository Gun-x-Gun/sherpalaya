<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact_us.content_en', null);
        $this->migrator->add('contact_us.content_fr', null);
        $this->migrator->add('contact_us.address_en', null);
        $this->migrator->add('contact_us.address_fr', null);
        $this->migrator->add('contact_us.contact_en', null);
        $this->migrator->add('contact_us.contact_fr', null);
        $this->migrator->add('contact_us.working_hour_en', null);
        $this->migrator->add('contact_us.working_hour_fr', null);
    }
};

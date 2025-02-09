<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('legal.privacy_policy', null);
        $this->migrator->add('legal.terms_and_condition', null);
        $this->migrator->add('legal.cookie_policy', null);
    }
};

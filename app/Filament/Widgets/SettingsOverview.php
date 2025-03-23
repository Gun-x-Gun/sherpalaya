<?php

namespace App\Filament\Widgets;

use App\Filament\Pages\Settings\ManageAboutUs;
use App\Filament\Pages\Settings\ManageCompany;
use App\Filament\Pages\Settings\ManageContactUs;
use App\Filament\Pages\Settings\ManageLandingPage;
use App\Filament\Pages\Settings\ManageLegal;
use App\Filament\Pages\Settings\ManagePage;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SettingsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Manage', 'About Us')
                ->url(ManageAboutUs::getUrl()),
            Stat::make('Manage', 'Company')
                ->url(ManageCompany::getUrl()),
            Stat::make('Manage', 'Contact Us')
                ->url(ManageContactUs::getUrl()),
            Stat::make('Manage', 'Landing Page')
                ->url(ManageLandingPage::getUrl()),
            Stat::make('Manage', 'Legal')
                ->url(ManageLegal::getUrl()),
            Stat::make('Manage', 'Page')
                ->url(ManagePage::getUrl()),
        ];
    }
}

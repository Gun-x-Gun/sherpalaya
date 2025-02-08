<?php

namespace App\Traits;

use App\Filament\Pages\Settings\ManageCompany;
use App\Filament\Pages\Settings\ManageContactUs;
use App\Filament\Pages\Settings\ManageLangingPage;
use App\Filament\Pages\Settings\ManagePage;
use AymanAlhattami\FilamentPageWithSidebar\FilamentPageSidebar;
use AymanAlhattami\FilamentPageWithSidebar\PageNavigationItem;
use AymanAlhattami\FilamentPageWithSidebar\Traits\HasPageSidebar;

trait HasSettingsSidebar
{
    use HasPageSidebar;

    public static function sidebar(): FilamentPageSidebar
    {
        return FilamentPageSidebar::make()
            ->setTitle('Settings')
            ->setNavigationItems([
                PageNavigationItem::make('Landing Page')
                    ->url(ManageLangingPage::getUrl())
                    ->icon('heroicon-o-cog-6-tooth')
                    ->isActiveWhen(function () {
                        return request()->routeIs(ManageLangingPage::getRouteName());
                    })
                    ->visible(true),
                PageNavigationItem::make('Page')
                    ->url(ManagePage::getUrl())
                    ->icon('heroicon-o-cog-6-tooth')
                    ->isActiveWhen(function () {
                        return request()->routeIs(ManagePage::getRouteName());
                    })
                    ->visible(true),
                PageNavigationItem::make('Contact Us')
                    ->url(ManageContactUs::getUrl())
                    ->icon('heroicon-o-cog-6-tooth')
                    ->isActiveWhen(function () {
                        return request()->routeIs(ManageContactUs::getRouteName());
                    })
                    ->visible(true),
                PageNavigationItem::make('Company')
                    ->url(ManageCompany::getUrl())
                    ->icon('heroicon-o-cog-6-tooth')
                    ->isActiveWhen(function () {
                        return request()->routeIs(ManageCompany::getRouteName());
                    })
                    ->visible(true),
            ]);
    }
}

<?php

namespace App\Filament\Pages\Settings;

use App\Filament\Fields\CuratorPicker;
use App\Settings\PageSetting;
use App\Traits\HasSettingsSidebar;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManagePage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = PageSetting::class;

    use HasSettingsSidebar;

    // Hide page from main navigation
    protected static bool $shouldRegisterNavigation = false;


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make()
                    ->columnSpanFull()
                    ->schema([
                        Tabs\Tab::make('Expedition')
                            ->schema([
                                CuratorPicker::make('expedition_page_cover_image_id')
                                    ->label('Exped Page Image')
                                    ->required(),
                                Textarea::make('expedition_page_content_en')
                                    ->label('Exped Page Content')
                                    ->required(),
                                Textarea::make('expedition_page_content_fr')
                                    ->label('Exped Page Content')
                                    ->required()
                            ]),
                        Tabs\Tab::make('Trek')
                            ->schema([
                                CuratorPicker::make('trek_page_cover_image_id')
                                    ->label('Trek Page Image')
                                    ->required(),
                                Textarea::make('trek_page_content_en')
                                    ->label('Trek Page Content')
                                    ->required(),
                                Textarea::make('trek_page_content_fr')
                                    ->label('Trek Page Content')
                                    ->required()
                            ]),
                        Tabs\Tab::make('Activity')
                            ->schema([
                                CuratorPicker::make('tour_page_cover_image_id')
                                    ->label('Activity Page Image')
                                    ->required(),
                                Textarea::make('tour_page_content_en')
                                    ->label('Activity Page Content')
                                    ->required(),
                                Textarea::make('tour_page_content_fr')
                                    ->label('Activity Page Content')
                                    ->required()
                            ]),
                        Tabs\Tab::make('Service')
                            ->schema([
                                CuratorPicker::make('service_page_cover_image_id')
                                    ->label('Service Page Image')
                                    ->required(),
                                Textarea::make('service_page_content_en')
                                    ->label('Service Page Content')
                                    ->required(),
                                Textarea::make('service_page_content_fr')
                                    ->label('Service Page Content')
                                    ->required()
                            ]),
                    ])
            ]);
    }
}

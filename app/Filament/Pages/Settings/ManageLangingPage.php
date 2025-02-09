<?php

namespace App\Filament\Pages\Settings;

use App\Filament\Fields\CuratorPicker;
use App\Settings\LandingPageSetting;
use App\Traits\HasSettingsSidebar;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageLangingPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = LandingPageSetting::class;

    use HasSettingsSidebar;

    // Hide page from main navigation
    protected static bool $shouldRegisterNavigation = false;


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make()
                    ->columnSpanFull()
                    ->tabs([
                        Tabs\Tab::make('Expedition Activity')
                            ->schema([
                                CuratorPicker::make('expedition_activity_image_id')
                                    ->required(),
                                TextInput::make('expedition_activity_count')
                                    ->required(),
                                Textarea::make('expedition_activity_content')
                                    ->required()
                            ]),
                        Tabs\Tab::make('Trek Activity')
                            ->schema([
                                CuratorPicker::make('trek_activity_image_id')
                                    ->required(),
                                TextInput::make('trek_activity_count')
                                    ->required(),
                                Textarea::make('trek_activity_content')
                                    ->required()
                            ]),
                        Tabs\Tab::make('Tour Activity')
                            ->schema([
                                CuratorPicker::make('tour_activity_image_id')
                                    ->required(),
                                TextInput::make('tour_activity_count')
                                    ->required(),
                                Textarea::make('tour_activity_content')
                                    ->required()
                            ]),
                        Tabs\Tab::make('Peak Activity')
                            ->schema([
                                CuratorPicker::make('peak_activity_image_id')
                                    ->required(),
                                TextInput::make('peak_activity_count')
                                    ->required(),
                                Textarea::make('peak_activity_content')
                                    ->required()
                            ]),

                        Tabs\Tab::make('Stats')
                            ->schema([
                                TextInput::make('traveller_count')
                                    ->required(),
                                TextInput::make('association_count')
                                    ->required(),
                                TextInput::make('customer_feedback')
                                    ->suffix('out of 10')
                                    ->required(),
                                TextInput::make('success_rate')
                                    ->suffix('%')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Parallax')
                            ->schema([
                                CuratorPicker::make('parallax_image_id')
                                    ->required(),
                                CuratorPicker::make('parallax_sound_id')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}

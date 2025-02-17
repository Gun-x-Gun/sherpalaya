<?php

namespace App\Filament\Pages\Settings;

use Filament\Forms;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Pages\SettingsPage;
use App\Traits\HasSettingsSidebar;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use App\Settings\LandingPageSetting;
use Filament\Forms\Components\Hidden;
use App\Filament\Fields\CuratorPicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\HtmlString;

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
                        Tabs\Tab::make('Animation')
                            ->schema([
                                Placeholder::make('button_title')
                                    ->dehydrated(false)
                                    ->hiddenLabel()
                                    ->content(
                                        new HtmlString('
                                            <h1 class="text-lg font-bold">
                                                <span class="no-underline">> </span>
                                                <span class="underline">General</span>
                                            </h1>
                                        ')
                                    ),

                                Split::make([
                                    CuratorPicker::make('animation_button_icon_id')
                                        ->required(),

                                    CuratorPicker::make('animation_sound_id')
                                        ->required(),
                                ]),
                                TextInput::make('animation_button_text')
                                    ->required(),


                                Placeholder::make('button_title')
                                    ->dehydrated(false)
                                    ->hiddenLabel()
                                    ->content(
                                        new HtmlString('
                                            <h1 class="text-lg font-bold mt-6">
                                                <span class="no-underline">> </span>
                                                <span class="underline">Animation Sections</span>
                                            </h1>
                                        ')
                                    ),

                                Repeater::make('animation_sections')
                                    ->hiddenLabel()
                                    ->schema([
                                        Hidden::make('id')
                                            ->default(fake()->regexify('[A-Za-z]{10}')),
                                        Split::make([
                                            CuratorPicker::make('image_id')
                                                ->required(),
                                            CuratorPicker::make('icon_id')
                                                ->required(),
                                        ]),
                                        TextInput::make('title')
                                            ->required()
                                            ->columnSpanFull(),
                                        TextInput::make('wait_time')
                                            ->numeric()
                                            ->minValue(0)
                                            ->default(2)
                                            ->required()
                                            ->columnSpanFull(),
                                        Textarea::make('content')
                                            ->required()
                                            ->columnSpanFull(),
                                    ]),


                            ]),
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
                                TextInput::make('stat_traveller_count')
                                    ->label("Traveller count")
                                    ->required(),
                                TextInput::make('stat_association_count')
                                    ->required(),
                                TextInput::make('stat_customer_feedback')
                                    ->label("Customer feedback")
                                    ->suffix('out of 10')
                                    ->required(),
                                TextInput::make('stat_success_rate')
                                    ->label("Success rate")
                                    ->suffix('%')
                                    ->required(),
                            ]),
                        Tabs\Tab::make('Parallax')
                            ->schema([
                                CuratorPicker::make('parallax_image_id')
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}

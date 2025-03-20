<?php

namespace App\Filament\Pages\Settings;

use Filament\Forms;
use Filament\Forms\Components\Section;
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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\HtmlString;

class ManageLandingPage extends SettingsPage
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
                                // General animation settings

                                Placeholder::make('general_animation_settings_placeholder')
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
                                Grid::make(2)
                                    ->schema([
                                        CuratorPicker::make('ask_for_animation_image_id')
                                            ->required(),
                                        Grid::make(1)
                                            ->columnSpan(1)
                                            ->schema([
                                                TextInput::make('ask_for_animation_title_en')
                                                    ->required(),
                                                TextInput::make('ask_for_animation_title_fr')
                                                    ->required(),
                                                Textarea::make('ask_for_animation_content_en')
                                                    ->required(),
                                                Textarea::make('ask_for_animation_content_fr')
                                                    ->required(),
                                                Grid::make(3)
                                                    ->columnSpan(1)
                                                    ->schema([
                                                        TextInput::make('ask_for_animation_positive_response_en')
                                                            ->label('Start button text')
                                                            ->required(),
                                                        TextInput::make('ask_for_animation_positive_response_fr')
                                                            ->label('Start button text')
                                                            ->required(),
                                                        TextInput::make('ask_for_animation_negative_response_en')
                                                            ->label('Skip button text')
                                                            ->required(),
                                                        TextInput::make('ask_for_animation_negative_response_fr')
                                                            ->label('Skip button text')
                                                            ->required(),
                                                        TextInput::make('animation_button_text_en')
                                                            ->label('Continue to site')
                                                            ->required(),
                                                        TextInput::make('animation_button_text_fr')
                                                            ->label('Continue to site')
                                                            ->required(),
                                                    ])
                                            ]),
                                    ]),

                                Grid::make(2)
                                    ->schema([
                                        CuratorPicker::make('animation_button_icon_id')
                                            ->required(),
                                        CuratorPicker::make('animation_sound_id')
                                            ->required(),
                                    ]),

                                // Animation sections

                                Placeholder::make('animation_sections_placeholder')
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
                                        Grid::make(2)
                                            ->schema([
                                                CuratorPicker::make('images')
                                                    ->required()
                                                    ->label('Images')
                                                    ->columnSpanFull()
                                                    ->multiple(),
                                            ]),
                                        Grid::make(6)
                                            ->schema([
                                                TextInput::make('title')
                                                    ->required()
                                                    ->columnSpan(4),
                                                TextInput::make('wait_time')
                                                    ->numeric()
                                                    ->minValue(0)
                                                    ->default(2)
                                                    ->required()
                                                    ->columnSpan(2),

                                                CuratorPicker::make('icon_id')
                                                    ->label('Animation Icon')
                                                    ->required()
                                                    ->columnSpan(3),
                                                Textarea::make('content')
                                                    ->required()
                                                    ->columnSpan(3),
                                            ]),

                                    ]),


                            ]),
                        Tabs\Tab::make('Home Page')
                            ->schema([
                                Section::make('Header')
                                    ->schema([
                                        TextInput::make('homepage_title_en')
                                            ->label('Title')
                                            ->required(),
                                        TextInput::make('homepage_title_fr')
                                            ->label('Title')
                                            ->required(),
                                        Textarea::make('homepage_description_en')
                                            ->label('Description')
                                            ->required(),
                                        Textarea::make('homepage_description_fr')
                                            ->label('Description')
                                            ->required(),

                                    ]),
                                Section::make('Cards')
                                    ->columns(4)
                                    ->schema([
                                        CuratorPicker::make('expedition_activity_image_id')
                                            ->required()
                                            ->label('Expedition Image')

                                            ->columnSpan(2),
                                        CuratorPicker::make('trek_activity_image_id')
                                            ->required()
                                            ->label('Trek Image')

                                            ->columnSpan(2),
                                        CuratorPicker::make('tour_activity_image_id')
                                            ->columnSpan(2)
                                            ->label('Activity Image')
                                            ->required(),
                                        CuratorPicker::make('peak_activity_image_id')
                                            ->columnSpan(2)
                                            ->label('Service Image')
                                            ->required(),
                                        TextInput::make('expedition_activity_count')
                                            ->label('Expeditions Count')
                                            ->required(),
                                        TextInput::make('trek_activity_count')
                                            ->label('Treks Count')
                                            ->required(),
                                        TextInput::make('tour_activity_count')
                                            ->label('Activities Count')
                                            ->required(),
                                        TextInput::make('peak_activity_count')
                                            ->label('Services Count')
                                            ->required(),
                                    ]),
                                Section::make('Stats')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('stat_traveller_count')
                                            ->label("Travellers Count")
                                            ->required(),
                                        TextInput::make('stat_association_count')
                                        ->label("Associations Count")
                                            ->required(),
                                        TextInput::make('stat_customer_feedback')
                                            ->label("Customer Feedback")
                                            ->suffix('out of 10')
                                            ->required(),
                                        TextInput::make('stat_success_rate')
                                            ->label("Success Rate")
                                            ->suffix('%')
                                            ->required(),
                                    ]),


                            ]),
                        Tabs\Tab::make('Featured')
                            ->schema([
                                Textarea::make('expedition_activity_content_en')
                                    ->label('Expedition Content')
                                    ->required(),
                                Textarea::make('expedition_activity_content_fr')
                                    ->label('Expedition Content')
                                    ->required(),
                                Textarea::make('trek_activity_content_en')
                                    ->label('Trek Content')
                                    ->required(),
                                Textarea::make('trek_activity_content_fr')
                                    ->label('Trek Content')
                                    ->required(),
                                Textarea::make('tour_activity_content_en')
                                    ->label('Activity Content')
                                    ->required(),
                                Textarea::make('tour_activity_content_fr')
                                    ->label('Activity Content')
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

<?php

namespace App\Filament\Pages\Settings;

use App\Settings\ContactUsSetting;
use App\Traits\HasSettingsSidebar;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageContactUs extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = ContactUsSetting::class;

    use HasSettingsSidebar;

    // Hide page from main navigation
    protected static bool $shouldRegisterNavigation = false;


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('English')
                    ->columnSpan(1)
                    ->schema([
                        Textarea::make('content_title_en')
                            ->label('Page Title')
                            ->autosize()
                            ->required(),
                        Textarea::make('content_en')
                            ->label('Content')
                            ->autosize()
                            ->required(),
                        Textarea::make('address_en')
                            ->label('Address')
                            ->autosize()
                            ->required(),
                        Textarea::make('contact_en')
                            ->label('Contact')
                            ->autosize()
                            ->required(),
                        Textarea::make('working_hour_en')
                            ->label('Working Hours')
                            ->autosize()
                            ->required(),
                    ]),
                Section::make('French')
                    ->columnSpan(1)
                    ->schema([
                        Textarea::make('content_title_fr')
                            ->label('Page Title')
                            ->autosize()
                            ->required(),
                        Textarea::make('content_fr')
                            ->label('Content')
                            ->autosize()
                            ->required(),
                        Textarea::make('address_fr')
                            ->label('Address')
                            ->autosize()
                            ->required(),
                        Textarea::make('contact_fr')
                            ->label('Contact')
                            ->autosize()
                            ->required(),
                        Textarea::make('working_hour_fr')
                            ->label('Working Hours')
                            ->autosize()
                            ->required(),
                    ]),
            ]);
    }
}

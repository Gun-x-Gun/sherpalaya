<?php

namespace App\Filament\Resources;

// use App\Filament\Resources\WebsiteSettingResource\Actions\ResetAction;
// use App\Filament\Resources\WebsiteSettingResource\Actions\ResetBulkAction;
use Closure;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\WebsiteSetting;
use Filament\Resources\Resource;
use App\Enums\WebsiteSettingType;
use Filament\Forms\Components\Section;
use FilamentTiptapEditor\TiptapEditor;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use FilamentTiptapEditor\Enums\TiptapOutput;
use Illuminate\Database\Eloquent\Collection;
use App\Storages\WebsiteSettingPathGenerator;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use App\Filament\Resources\WebsiteSettingResource\Pages;
use App\Filament\Resources\WebsiteSettingResource\RelationManagers;

class WebsiteSettingResource extends Resource
{

    public static ?WebsiteSettingType $websiteSettingTypeBeingUpdated = null;

    protected static ?string $model = WebsiteSetting::class;
    protected static bool $shouldRegisterNavigation = false;
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static function loadValueFormField(string $fieldName): array
    {
        return match (self::$websiteSettingTypeBeingUpdated) {
            WebsiteSettingType::TEXT,
            WebsiteSettingType::NUMBER => [
                Textarea::make($fieldName)
                    ->required()
            ],
            WebsiteSettingType::HTML => [
                TiptapEditor::make($fieldName)
                    ->required()
            ],
            WebsiteSettingType::IMAGE,
            WebsiteSettingType::FILE => [
                CuratorPicker::make($fieldName)
                    ->pathGenerator(WebsiteSettingPathGenerator::class)
            ],
            default => [
                Textarea::make($fieldName)
                    ->hidden(function (\Filament\Forms\Get $get) {
                        return !(
                            ($get('type') == WebsiteSettingType::TEXT->value)
                        );
                    })
                    ->disabled(function (\Filament\Forms\Get $get) {
                        return !(
                            ($get('type') == WebsiteSettingType::TEXT->value)
                        );
                    })
                    ->required(function (\Filament\Forms\Get $get) {
                        return (
                            ($get('type') == WebsiteSettingType::TEXT->value)
                        );
                    }),
                TiptapEditor::make($fieldName)
                    ->hidden(function (\Filament\Forms\Get $get) {
                        return !(
                            ($get('type') == WebsiteSettingType::HTML->value)
                        );
                    })
                    ->disabled(function (\Filament\Forms\Get $get) {
                        return !(
                            ($get('type') == WebsiteSettingType::HTML->value)
                        );
                    })
                    ->required(function (\Filament\Forms\Get $get) {
                        return (
                            ($get('type') == WebsiteSettingType::HTML->value)
                        );
                    }),
                CuratorPicker::make($fieldName)
                    ->hidden(function (\Filament\Forms\Get $get) {
                        return !(
                            ($get('type') == WebsiteSettingType::IMAGE->value)
                            || ($get('type') == WebsiteSettingType::FILE->value)
                        );
                    })
                    ->disabled(function (\Filament\Forms\Get $get) {
                        return !(
                            ($get('type') == WebsiteSettingType::IMAGE->value)
                            || ($get('type') == WebsiteSettingType::FILE->value)
                        );
                    })
                    ->pathGenerator(WebsiteSettingPathGenerator::class),
            ]
        };
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->disabled(),
                        TextInput::make('type')
                            ->reactive()
                            ->disabled(),
                        Textarea::make('description')
                            ->disabled(),
                        ...self::loadValueFormField('default_value'),
                        ...self::loadValueFormField('value'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type'),
                TextColumn::make('description'),
                TextColumn::make('value')
                    ->limit(50),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // ResetAction::make(),
            ])
            ->bulkActions([
                // ResetBulkAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebsiteSettings::route('/'),
            'edit' => Pages\EditWebsiteSetting::route('/{record}/edit'),
        ];
    }
}

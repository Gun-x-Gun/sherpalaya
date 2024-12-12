<?php

namespace App\Filament\Resources;

use App\Enums\ItineraryTypes;
use App\Enums\TrekDifficulty;
use App\Filament\Resources\TrekResource\Pages;
use App\Filament\Resources\TrekResource\RelationManagers;
use App\Models\Trek;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\Components\Forms\Sidebar;

class TrekResource extends Resource
{
    protected static ?string $model = Trek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Trek')
                    ->columnSpanFull()
                    ->tabs([
                        Tabs\Tab::make('Primary')
                            ->schema([
                                Sidebar::make([
                                    Section::make('')
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('title')
                                            ->columnSpanFull()
                                            ->required(),
                                        RichEditor::make('description')
                                            ->columnSpanFull()
                                            ->required(),
                                        CuratorPicker::make('cover_image_id')
                                            ->color('primary')
                                            ->label('Cover Image')
                                            ->hint('for trek page')
                                            ->relationship('coverImage', 'id'),
                                        CuratorPicker::make('feature_image_id')
                                            ->label('Feature Image')
                                            ->hint('for home page')
                                            ->relationship('featureImage', 'id'),

                                    ]),
                                ],[
                                    Section::make('')
                                    // ->columns(2)
                                    ->schema([
                                        CuratorPicker::make('images')
                                        ->multiple()
                                        ->label('Images')
                                        ->hint('any other relevant images')
                                        ->relationship('images', 'id')
                                    ])
                                ]),
                            ]),
                        Tabs\Tab::make('Other')
                            ->schema([
                                Sidebar::make([
                                    // Section::make('Destinations')
                                    //     ->schema([
                                    //         RichEditor::make('destinations')
                                    //         ->hiddenLabel()
                                    //         ->columnSpanFull(),
                                    //     ]),
                                    Section::make('Key Highlights')
                                        ->schema([
                                            Repeater::make('key_highlights')
                                            ->hiddenLabel()
                                            ->simple(
                                                TextInput::make('key_highlights')
                                                ->hiddenLabel()
                                                ->columnSpanFull(),
                                            )
                                            ]),
                                    Section::make('Essential Tips')
                                        ->schema([
                                            Repeater::make('essential_tips')
                                            ->hiddenLabel()
                                            ->simple(
                                                TextInput::make('key_highlights')
                                                ->hiddenLabel()
                                                ->columnSpanFull(),
                                            )
                                        ])
                                ],[
                                    Section::make()
                                        ->columns(2)
                                        ->schema([
                                        Select::make('trek_difficulty')
                                            ->options(TrekDifficulty::class)
                                            ->native(false)
                                            ->columnSpanFull(),
                                        TextInput::make('duration')
                                            ->numeric()
                                            ->minValue(1)
                                            ->maxValue(999)
                                            ->suffix('days'),
                                        TextInput::make('grade')
                                            ->numeric()
                                            ->minValue(1)
                                            ->maxValue(10)
                                            ->suffix('/10'),
                                        TextInput::make('starting_altitude')
                                            ->numeric()
                                            ->minValue(0)
                                            ->maxValue(3000)
                                            ->suffix("m"),
                                        TextInput::make('highest_altitude')
                                            ->numeric()
                                            ->minValue(1000)
                                            ->maxValue(8849)
                                            ->suffix("m"),
                                        ]),
                                Section::make()
                                        ->schema([
                                            TextInput::make('best_time_for_trek'),
                                            TextInput::make('starting_ending_point')
                                        ]),

                                ]),

                            ]),
                        Tabs\Tab::make('Costs')
                            ->schema([
                                Section::make('Costs Include')
                                    ->schema([
                                        Repeater::make('costs_include')
                                            ->hiddenLabel()
                                            ->simple(
                                                TextInput::make('costs_include')
                                                        ->prefixIcon('heroicon-o-check-badge')
                                                        ->prefixIconColor('success')

                                            )
                                    ]),
                                Section::make('Costs Exclude')
                                    ->schema([
                                        Repeater::make('costs_exclude')
                                            ->hiddenLabel()
                                            ->simple(
                                                TextInput::make('costs_exclude')
                                                ->prefixIcon('heroicon-o-x-circle')
                                                ->prefixIconColor('danger')



                                            )
                                    ]),
                            ]),
                            Tabs\Tab::make('Itinerary')
                            ->schema([
                                Section::make("")
                                ->schema([
                                    Repeater::make('itinerary')
                                        ->label('Itenarary')
                                        ->relationship('itineraries')
                                        ->columns(7)
                                        ->schema([
                                            TextInput::make('title')
                                                ->columnSpan(7),
                                                TableRepeater::make('itineraryDetails')
                                                    ->relationship('itineraryDetails')
                                                    ->schema([
                                                        Select::make('type')
                                                            ->options(ItineraryTypes::class)
                                                            ->native(false),
                                                        TextInput::make('description')
                                                    ])
                                        ])

                                ]),
                            ])
                    ]),





            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                    Split::make([
                        CuratorColumn::make('cover_image_id')
                        ->label('Cover Image')
                        ->size(200),
                        TextColumn::make('title')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold),
                        // ->description(fn (Trek $record): string => strip_tags($record->grade . "/10"))
                        // ->html(),
                    ]),

                ])
            ->contentGrid([
                'md' => 2,
                // 'xl' => 3,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListTreks::route('/'),
            'create' => Pages\CreateTrek::route('/create'),
            'view' => Pages\ViewTrek::route('/{record}'),
            'edit' => Pages\EditTrek::route('/{record}/edit'),
        ];
    }
}

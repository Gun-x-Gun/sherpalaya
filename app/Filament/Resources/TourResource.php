<?php

namespace App\Filament\Resources;

use App\Enums\ItineraryTypes;
use App\Enums\TourType;
use App\Filament\Resources\TourResource\Pages;
use App\Filament\Resources\TourResource\RelationManagers;
use App\Models\Tour;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\Components\Forms\Sidebar;

class TourResource extends Resource
{
    protected static ?string $model = Tour::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Services';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Sidebar::make([
                    Section::make('General')
                        ->columns(2)
                        ->schema([
                            TextInput::make('title'),
                            Select::make('type')
                                ->options(TourType::class)
                                ->native(false),
                            RichEditor::make('description')
                                ->columnSpanFull()
                                ->required(),
                            CuratorPicker::make('cover_image_id')
                                ->color('primary')
                                ->label('Cover Image')
                                ->hint('for tour page')
                                ->relationship('coverImage', 'id'),
                            CuratorPicker::make('images')
                                ->multiple()
                                ->label('Images')
                                ->hint('any other relevant images')
                                ->relationship('images', 'id'),
                        ]),
                ], [
                    Section::make()
                        ->schema([
                            Toggle::make('is_featured')
                                ->default(false),
                            CuratorPicker::make('cover_image_id')
                                ->color('primary')
                                ->label('Feature Image')
                                ->hint('for homepage')
                                ->relationship('featureImage', 'id'),
                        ]),
                    ]),
                Section::make('Destinations')
                    ->schema([
                        Select::make('destinations')
                            ->hiddenLabel()
                            ->multiple()
                            ->relationship(titleAttribute: 'name')
                            ->preload()
                            ->searchable(['name', 'location'])
                            ->native(false),
                    ]),
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
                                    ->reorderable()
                                    ->cloneable()
                            ])
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold),
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
            'index' => Pages\ListTours::route('/'),
            'create' => Pages\CreateTour::route('/create'),
            'view' => Pages\ViewTour::route('/{record}'),
            'edit' => Pages\EditTour::route('/{record}/edit'),
        ];
    }
}
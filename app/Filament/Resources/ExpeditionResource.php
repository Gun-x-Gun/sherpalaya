<?php

namespace App\Filament\Resources;

use App\Enums\ItineraryTypes;
use App\Filament\Resources\ExpeditionResource\Pages;
use App\Filament\Resources\ExpeditionResource\RelationManagers;
use App\Models\Expedition;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\Components\Forms\Sidebar;

class ExpeditionResource extends Resource
{
    protected static ?string $model = Expedition::class;
    protected static ?string $navigationGroup = 'Services';
    protected static ?string $navigationIcon = 'heroicon-o-moon';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Sidebar::make([
                    Section::make('General')
                        ->columns(2)
                        ->schema([
                            TextInput::make('title')
                                ->columnSpanFull(),
                            RichEditor::make('description')
                                ->columnSpanFull()
                                ->required()
                                ->toolbarButtons([
                                    // 'attachFiles',
                                    'blockquote',
                                    'bold',
                                    'bulletList',
                                    // 'codeBlock',
                                    'h2',
                                    'h3',
                                    'italic',
                                    'link',
                                    'orderedList',
                                    'redo',
                                    // 'strike',
                                    'underline',
                                    'undo',
                                ]),
                            CuratorPicker::make('cover_image_id')
                                ->color('primary')
                                ->label('Cover Image')
                                ->hint('for expedition page')
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
                            CuratorPicker::make('feature_image_id')
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
                                    ->columnSpan(3),
                                Select::make('destinations')
                                    ->relationship('destinations', 'name')
                                    ->multiple()
                                    ->preload()
                                    ->searchable()
                                    ->columnSpan(4)
                                    ->native(false),
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
                Split::make([
                    TextColumn::make('title')
                        ->size(TextColumn\TextColumnSize::Large)
                        ->weight(FontWeight::Bold),
                    // TextColumn::make('type')
                    //     ->badge(),
                ]),
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
            'index' => Pages\ListExpeditions::route('/'),
            'create' => Pages\CreateExpedition::route('/create'),
            'view' => Pages\ViewExpedition::route('/{record}'),
            'edit' => Pages\EditExpedition::route('/{record}/edit'),
        ];
    }
}

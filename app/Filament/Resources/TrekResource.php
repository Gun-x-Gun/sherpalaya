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
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\Layout\Grid;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\Components\Forms\Sidebar;

class TrekResource extends Resource
{
    protected static ?string $model = Trek::class;

    protected static ?int $navigationSort = 3;


    protected static ?string $navigationIcon = 'heroicon-o-eye';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Tabs::make('Trek')
                        ->columnSpanFull()
                        ->tabs([
                                Tabs\Tab::make('General')
                                    ->icon('heroicon-m-clipboard')
                                    ->schema([
                                            Sidebar::make([
                                                Section::make('')
                                                    ->columns(5)
                                                    ->schema([
                                                            TextInput::make('title')
                                                                ->columnSpan(3)
                                                                ->required(),
                                                            Select::make('region_id')
                                                                ->label('Region')
                                                                ->relationship('region', 'name')
                                                                ->native(false)
                                                                ->columnSpan(2),
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
                                                        ]),
                                            ], [
                                                Section::make('')
                                                    ->schema([
                                                            CuratorPicker::make('cover_image_id')
                                                                ->color('primary')
                                                                ->label('Cover Image')
                                                                ->hint('for trek page')
                                                                ->relationship('coverImage', 'id'),
                                                        ]),

                                                Section::make('')
                                                    ->schema([
                                                            Toggle::make('is_featured')
                                                                ->default(false),
                                                            CuratorPicker::make('feature_image_id')
                                                                ->label('Feature Image')
                                                                ->hint('for home page')
                                                                ->relationship('featureImage', 'id'),
                                                        ]),

                                            ]),
                                        ]),
                                Tabs\Tab::make('Details')
                                    ->icon(icon: 'heroicon-m-chart-bar-square')
                                    ->schema([
                                            Sidebar::make([
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
                                                Section::make('Key Highlights')
                                                    ->schema([
                                                            Repeater::make('key_highlights')
                                                                ->hiddenLabel()
                                                                ->simple(
                                                                    TextArea::make('key_highlights')
                                                                        ->rows(1)
                                                                        ->autosize()
                                                                        ->hiddenLabel()
                                                                        ->columnSpanFull(),
                                                                )
                                                        ]),
                                                Section::make('Essential Tips')
                                                    ->schema([
                                                            Repeater::make('essential_tips')
                                                                ->hiddenLabel()
                                                                ->simple(
                                                                    TextArea::make('essential_tips')
                                                                        ->rows(1)
                                                                        ->autosize()
                                                                        ->hiddenLabel()
                                                                        ->columnSpanFull(),
                                                                )
                                                        ]),
                                            ], [
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
                                                                ->label('Starting/Ending Point')
                                                        ]),

                                            ]),

                                        ]),
                                Tabs\Tab::make('Images')
                                    ->icon('heroicon-m-photo')

                                    ->schema([
                                        Section::make()
                                            ->schema([
                                                    CuratorPicker::make('images')
                                                        ->multiple()
                                                        ->label('Images')
                                                        ->hint('any other relevant images')
                                                        ->relationship('images', 'id'),
                                                ]),
                                    ]),
                                Tabs\Tab::make('Costs')
                                    ->icon('heroicon-m-exclamation-circle')

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
                                    ->icon('heroicon-m-calendar-date-range')

                                    ->schema([
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
                                                                            Textarea::make('description')
                                                                                ->rows(1)
                                                                                ->autosize()
                                                                        ])
                                                                    ->reorderable()
                                                                    ->cloneable()
                                                            ])
                                                ]),
                                    ]),
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
                        Stack::make([
                            TextColumn::make('title')
                                ->size(TextColumn\TextColumnSize::Large)
                                ->weight(FontWeight::Bold),
                            TextColumn::make('duration')
                                ->icon('heroicon-m-clock')
                                ->size(TextColumn\TextColumnSize::Small)
                                ->suffix(' days'),
                            TextColumn::make('trek_difficulty')
                                ->badge()
                                ->icon('heroicon-m-bolt')
                                ->size(TextColumn\TextColumnSize::Small)
                                ->prefix(''),
                        ]),

                        // ->description(fn (Trek $record): string => strip_tags($record->grade . "/10"))
                        // ->html(),
                    ]),

                ])
                ->contentGrid([
                    'sm' => 1,
                    'md' => 2,
                    'xl' => 2,
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

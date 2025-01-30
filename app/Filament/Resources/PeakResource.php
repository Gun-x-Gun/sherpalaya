<?php

namespace App\Filament\Resources;

use App\Enums\ItineraryTypes;
use App\Enums\TrekDifficulty;
use App\Filament\Resources\PeakResource\Pages;
use App\Filament\Resources\PeakResource\RelationManagers;
use App\Models\Peak;
use App\Filament\Fields\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Icetalker\FilamentTableRepeater\Forms\Components\TableRepeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\Components\Forms\Sidebar;

class PeakResource extends Resource
{
    protected static ?string $model = Peak::class;
    protected static ?int $navigationSort = 2;


    protected static ?string $navigationIcon = 'heroicon-o-sun';
    protected static ?string $navigationGroup = 'Content';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('General')
                        ->icon('heroicon-m-clipboard')
                        ->completedIcon('heroicon-m-clipboard')
                        ->schema([
                            Sidebar::make([
                                Section::make('')
                                    ->columns(5)
                                    ->schema([
                                        TextInput::make('title')
                                            ->columnSpan(3)
                                            ->required()
                                            ->hiddenOn('view'),
                                        Select::make('region_id')
                                            ->label('Region')
                                            ->relationship('region', 'name')
                                            ->native(false)
                                            ->required()
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

                                Section::make()
                                    ->schema([
                                        CuratorPicker::make('cover_image_id')
                                            ->color('primary')
                                            ->label('Cover Image')
                                            ->hint('for peak page')
                                            ->relationship('coverImage', 'id'),
                                    ]),
                                Section::make()
                                    ->schema([
                                        Toggle::make('is_featured')
                                            ->default(false),
                                        CuratorPicker::make('feature_image_id')
                                            ->color('primary')
                                            ->label('Feature Image')
                                            ->hint('for homepage')
                                            ->relationship('featureImage', 'id'),
                                    ]),

                            ]),
                        ]),
                    Wizard\Step::make('Details')
                        ->icon('heroicon-m-chart-bar-square')
                        ->completedIcon('heroicon-m-chart-bar-square')

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
                                            ->required()
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
                                        TextArea::make('best_time_for_peak')
                                            ->columnSpanFull()
                                            ->required()
                                            ->label('Best Time For Peak'),
                                        Select::make('peak_difficulty')
                                            ->label(label: 'Peak Difficulty')
                                            ->options(TrekDifficulty::class)
                                            ->default(state: TrekDifficulty::HARD)
                                            ->native(false)
                                            ->columnSpanFull(),
                                        TextInput::make('duration')
                                            ->numeric()
                                            ->required()
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
                                            ->required()
                                            ->suffix("m"),
                                        TextInput::make('highest_altitude')
                                            ->numeric()
                                            ->required()
                                            ->suffix("m"),
                                    ]),
                                Section::make()
                                    ->schema([
                                        TextInput::make('starting_point')
                                                ->label('Starting Point')
                                                ->required(),
                                            TextInput::make('ending_point')
                                                ->label('Ending Point')
                                                ->required(),
                                    ]),
                            ]),
                        ]),
                    Wizard\Step::make('Images')
                        ->icon('heroicon-m-photo')
                        ->completedIcon('heroicon-m-photo')

                        ->schema([
                            Section::make('')
                                ->schema([
                                    CuratorPicker::make('images')
                                        ->multiple()
                                        ->label('Images')
                                        ->hint('any other relevant images')
                                        ->relationship('images', 'id'),
                                ]),
                        ]),
                    Wizard\Step::make('Costs')
                        ->icon('heroicon-m-exclamation-circle')
                        ->completedIcon('heroicon-m-exclamation-circle')

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
                    Wizard\Step::make('Itinerary')
                        ->icon('heroicon-m-calendar-date-range')
                        ->completedIcon('heroicon-m-calendar-date-range')

                        ->schema([
                            Section::make("")
                                ->schema([
                                    Repeater::make('itinerary')
                                        ->label('Itinerary')
                                        ->relationship('itineraries')
                                        ->columns(7)
                                        ->schema([
                                            TextInput::make('title')
                                                ->columnSpan(3)
                                                ->required(),
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
                                                        ->autosize(),
                                                ])
                                                ->reorderable()
                                                ->cloneable()
                                        ])
                                ]),
                        ]),
                ])->columnSpanFull()
                    ->skippable(),
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
                        TextColumn::make('peak_difficulty')
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
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListPeaks::route('/'),
            'create' => Pages\CreatePeak::route('/create'),
            'view' => Pages\ViewPeak::route('/{record}'),
            'edit' => Pages\EditPeak::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Enums\CategoryTypes;
use App\Enums\ItineraryTypes;
use App\Enums\TourType;
use App\Enums\TrekDifficulty;
use App\Filament\Resources\TourResource\Pages;
use App\Filament\Resources\TourResource\RelationManagers;
use App\Models\Tour;
use App\Filament\Fields\CuratorPicker;
use App\Filament\Fields\TranslatableRepeater;
use App\Traits\Filament\TranslatableResource;
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

class TourResource extends Resource
{
    use TranslatableResource;

    protected static ?string $model = Tour::class;
    protected static ?int $navigationSort = 4;

    protected static ?string $pluralModelLabel = 'Activities';
    protected static ?string $modelLabel = 'Activity';


    protected static ?string $navigationIcon = 'heroicon-o-swatch';
    protected static ?string $navigationGroup = 'Content';

    public static function getRepeaterFields(): array
    {
        return [
            'costs_include',
            'costs_exclude',
        ];
    }

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
                                    ->columns(2)
                                    ->schema([
                                        TextInput::make('title')
                                            ->required()
                                            ->translatable(),
                                        Select::make('category_id')
                                            ->relationship(
                                                'category',
                                                'name',
                                                modifyQueryUsing: fn($query) => $query->where('type', CategoryTypes::TOUR)
                                            )
                                            ->native(false)
                                            ->columnSpan(1),
                                        RichEditor::make('description')
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
                                            ])
                                            ->translatable()
                                            ->columnSpanFull(),
                                    ]),
                            ], [
                                Section::make()
                                    ->schema([
                                        CuratorPicker::make('cover_image_id')
                                            ->color('primary')
                                            ->label('Cover Image')
                                            ->hint('for tour page')
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
                                        TranslatableRepeater::make('keyHighlights')
                                            ->repeater(function ($repeater) {
                                                return $repeater
                                                    ->label('Key Highlights')
                                                    ->relationship('keyHighlights')
                                                    ->reorderable();
                                            })
                                            ->fields(function ($fields) {
                                                $fields[0] = $fields[0]->label('Title')
                                                    ->required();
                                                $fields[1] = $fields[1]->label('Description')
                                                    ->autosize()
                                                    ->required();

                                                return $fields;
                                            })
                                            ->table(
                                                [
                                                    TextInput::class,
                                                    TextArea::class,
                                                ],
                                                [
                                                    'title',
                                                    'description'
                                                ]
                                            ),
                                    ]),
                                Section::make('Essential Tips')
                                    ->schema([
                                        TranslatableRepeater::make('essentialTips')
                                            ->repeater(function ($repeater) {
                                                return $repeater
                                                    ->label('Essential Tips')
                                                    ->relationship('essentialTips')
                                                    ->reorderable();
                                            })
                                            ->fields(function ($fields) {
                                                $fields[0] = $fields[0]->label('Title')
                                                    ->required();
                                                $fields[1] = $fields[1]->label('Description')
                                                    ->autosize()
                                                    ->required();

                                                return $fields;
                                            })
                                            ->table(
                                                [
                                                    TextInput::class,
                                                    TextArea::class,
                                                ],
                                                [
                                                    'title',
                                                    'description'
                                                ]
                                            ),
                                    ]),
                            ], [
                                Section::make()
                                    ->columns(2)
                                    ->schema([
                                        TextArea::make('best_time_for_tour')
                                            ->required()
                                            ->label('Best Time For Tour')
                                            ->translatable()
                                            ->columnSpanFull(),
                                        TextInput::make('duration')
                                            ->required(),
                                        TextInput::make('grade')
                                            ->numeric()
                                            ->minValue(1)
                                            ->maxValue(10)
                                            ->suffix('/10'),
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
                            Section::make()
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
                                    TranslatableRepeater::make('costs_include')
                                        ->field(function ($field) {
                                            return $field
                                                ->prefixIcon('heroicon-o-check-badge')
                                                ->prefixIconColor('success');
                                        })
                                        ->simple(TextInput::class)
                                        ->hiddenLabel(),
                                ]),
                            Section::make('Costs Exclude')
                                ->schema([
                                    TranslatableRepeater::make('costs_exclude')
                                        ->field(function ($field) {
                                            return $field
                                                ->prefixIcon('heroicon-o-x-circle')
                                                ->prefixIconColor('danger');
                                        })
                                        ->simple(TextInput::class)
                                        ->hiddenLabel(),
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
                                                ->required()
                                                ->translatable()
                                                ->columnSpan(3),
                                            Select::make('destinations')
                                                ->relationship('destinations', 'name')
                                                ->multiple()
                                                ->preload()
                                                ->searchable()
                                                ->columnSpan(4)
                                                ->native(false),
                                            TranslatableRepeater::make('itineraryDetails')
                                                ->repeater(function ($repeater) {
                                                    return $repeater
                                                        ->relationship('itineraryDetails')
                                                        ->reorderable()
                                                        ->cloneable();
                                                })
                                                ->fields(function ($fields) {
                                                    $fields[0] = $fields[0]->options(ItineraryTypes::class)
                                                        ->native(false);
                                                    $fields[1] = $fields[1]->rows(1)
                                                        ->autosize();

                                                    return $fields;
                                                })
                                                ->excludeFieldsFromTranslation([
                                                    'type'
                                                ])
                                                ->table(
                                                    [
                                                        Select::class,
                                                        Textarea::class,
                                                    ],
                                                    [
                                                        'type',
                                                        'description',
                                                    ]
                                                )->columnSpanFull(),
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
                            ->size(TextColumn\TextColumnSize::Small),
                        TextColumn::make('category.name')
                            ->badge(),

                    ]),

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
            'index' => Pages\ListTours::route('/'),
            'create' => Pages\CreateTour::route('/create'),
            'view' => Pages\ViewTour::route('/{record}'),
            'edit' => Pages\EditTour::route('/{record}/edit'),
        ];
    }
}

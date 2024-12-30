<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DestinationResource\Pages;
use App\Filament\Resources\DestinationResource\RelationManagers;
use App\Models\Destination;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Dotswan\MapPicker\Fields\Map;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\Components\Forms\Sidebar;

class DestinationResource extends Resource
{
    protected static ?string $model = Destination::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected static ?string $navigationGroup = 'Info';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Sidebar::make([
                    Section::make('')
                        ->schema([
                            TextInput::make('name'),
                            RichEditor::make('description')
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
                            Map::make('location')
                                ->label('Location')
                                ->columnSpanFull()
                                ->defaultLocation(latitude: 40.4168, longitude: -3.7038)
                                ->extraStyles([
                                    'min-height: 50vh',
                                    'border-radius: 50px'
                                ])
                                // ->liveLocation(true, true, 5000)
                                // ->showMarker()
                                ->markerColor("#22c55eff")
                                ->showFullscreenControl()
                                ->showZoomControl()
                                ->draggable()
                                ->tilesUrl("https://tile.openstreetmap.de/{z}/{x}/{y}.png")
                                ->zoom(15)
                                ->detectRetina()
                                ->showMyLocationButton()
                                ->geoMan(false)
                                ->geoManEditable(true)
                                ->geoManPosition('bottomright')
                                ->drawCircleMarker()
                                // ->rotateMode()
                                // ->clickable() //click to move marker
                                // ->drawMarker()
                                // ->drawPolygon()
                                // ->drawPolyline()
                                // ->drawCircle()
                                ->dragMode()
                                // ->cutPolygon()
                                // ->editPolygon()
                                // ->deleteLayer()
                                ->setColor('#3388ff')
                                ->setFilledColor('#cad9ec')
                        ]),

                ], [
                    Section::make()
                    ->schema([
                        Select::make('region_id')
                            ->relationship('region','name')
                            ->native(false)
                            ->preload()
                            ->searchable(),

                    ]),
                    Section::make()
                        ->schema([

                            CuratorPicker::make('destinationImages')
                                ->multiple()
                                ->label('Images')
                                ->hint('related')
                                ->relationship('destinationImages', 'id')

                        ]),

                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    TextColumn::make('name')
                    ->size(TextColumn\TextColumnSize::Large)
                    // ->weight(FontWeight::Bold)
                    ->searchable(),
                    TextColumn::make('region.name')
                        ->badge(),
                    CuratorColumn::make('destinationImages')
                    ->size(90)
                    ->ring(1) // options 0,1,2,4
                    ->overlap(2) // options 0,2,3,4
                    ->limit(2),

                ]),
            ])
            ->contentGrid([
                'sm' => 1,
                'lg' => 2
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
            'index' => Pages\ListDestinations::route('/'),
            'create' => Pages\CreateDestination::route('/create'),
            'view' => Pages\ViewDestination::route('/{record}'),
            'edit' => Pages\EditDestination::route('/{record}/edit'),
        ];
    }
}

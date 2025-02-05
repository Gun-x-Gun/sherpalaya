<?php

namespace App\Filament\Resources;

use App\Filament\Fields\CuratorPicker;
use App\Filament\Resources\OurSherpaResource\Pages;
use App\Filament\Resources\OurSherpaResource\RelationManagers;
use App\Filament\Resources\OurSherpaResource\Widgets\SherpaExpeditionsTableWidget;
use App\Filament\Resources\OurSherpaResource\Widgets\SherpaMultiWidget;
use App\Filament\Resources\OurSherpaResource\Widgets\SherpaPeaksTableWidget;
use App\Filament\Resources\OurSherpaResource\Widgets\SherpaToursTableWidget;
use App\Filament\Resources\OurSherpaResource\Widgets\SherpaTreksTableWidget;
use App\Models\OurSherpa;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class OurSherpaResource extends Resource
{
    protected static ?string $model = OurSherpa::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $modelLabel = 'Sherpa';
    protected static ?string $navigationLabel = 'Our Sherpas';


    protected static ?string $navigationGroup = 'Site';

    protected static ?int $navigationSort = 4;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->columns(2)
                    ->schema([
                        Section::make('')
                            ->columnSpan(1)
                            ->schema([
                                CuratorPicker::make('profile_picture_id')
                                    ->color('primary')
                                    ->label('Profile Picture')
                                    ->hint('for profile page')
                                    ->relationship('profilePicture', 'id'),
                            ]),
                        Section::make('')
                            ->columnSpan(1)
                            ->schema([
                                TextInput::make('name')
                                    ->columnSpan(2)
                                    ->required(),
                                TextInput::make('title')
                                    ->columnSpan(2)
                                    ->required(),
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
                            ]),
                    ]),
                    Section::make('Sherpa Experience')
                    ->hiddenOn('view')
                    ->columns(2)
                    ->schema([
                        Select::make('expeditions')
                            ->relationship(titleAttribute: 'title')
                            ->multiple()
                            ->preload()
                            ->native(false),
                        Select::make('peaks')
                            // ->hiddenLabel()
                            ->multiple()
                            ->relationship(titleAttribute: 'title')
                            ->preload()
                            ->searchable(['title', 'region'])
                            ->native(false),
                        Select::make('treks')
                            // ->hiddenLabel()
                            ->multiple()
                            ->relationship(titleAttribute: 'title')
                            ->preload()
                            ->searchable(['title', 'region'])
                            ->native(false),
                        Select::make('tours')
                            // ->hiddenLabel()
                            ->multiple()
                            ->relationship(titleAttribute: 'title')
                            ->preload()
                            ->searchable(['title', 'region'])
                            ->native(false),
                    ]),
                Section::make('Recognition')
                    ->schema([
                        CuratorPicker::make('awardsAndCertificates')
                            ->multiple()
                            ->label('Awards and Certificates')
                            ->hint('rewarded to Sherpa')
                            ->relationship('awardsAndCertificates', 'id'),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Split::make([
                    CuratorColumn::make('profile_picture_id')
                        ->label('Profile Picture')
                        ->size(200),
                    Stack::make([
                        TextColumn::make('name')
                            ->size(TextColumn\TextColumnSize::Large)
                            ->weight(FontWeight::Bold),
                        TextColumn::make('title')
                            ->size(TextColumn\TextColumnSize::Large)
                            ->description(fn(?OurSherpa $record): HtmlString => new HtmlString($record?->description ?? ''))
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
    public static function getWidgets(): array
    {
        return [
            SherpaExpeditionsTableWidget::class,
            SherpaPeaksTableWidget::class,
            SherpaTreksTableWidget::class,
            SherpaToursTableWidget::class,
            SherpaMultiWidget::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOurSherpas::route('/'),
            'create' => Pages\CreateOurSherpa::route('/create'),
            'view' => Pages\ViewOurSherpa::route('/{record}'),
            'edit' => Pages\EditOurSherpa::route('/{record}/edit'),
        ];
    }
}

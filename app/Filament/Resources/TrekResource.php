<?php

namespace App\Filament\Resources;

use App\Enums\TrekDifficulty;
use App\Filament\Resources\TrekResource\Pages;
use App\Filament\Resources\TrekResource\RelationManagers;
use App\Models\Trek;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TrekResource extends Resource
{
    protected static ?string $model = Trek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Primary Details')
                    ->columns(2)
                    ->schema([
                        TextInput::make('title')
                            ->columnSpanFull(),
                        RichEditor::make('description'),
                        FileUpload::make('cover_image'),
                    ]),
                Section::make('Additional Details')
                    ->schema([
                        TextInput::make('duration'),
                        TextInput::make('grade')
                            ->numeric()
                            ->suffix('/10'),
                        RichEditor::make('destinations'),
                        TextInput::make('starting_ending_point'),
                        TextInput::make('best_time_for_trek'),
                        TextInput::make('starting_altitude')
                            ->numeric()
                            ->suffix("m"),
                        TextInput::make('highest_altitude')
                            ->numeric()
                            ->suffix("m"),
                    ]),
                Section::make('Primary Details')
                    ->schema([
                        Select::make('trek_difficulty')
                            ->options(TrekDifficulty::class)
                            ->native(false),
                        RichEditor::make('key_highlights')

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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

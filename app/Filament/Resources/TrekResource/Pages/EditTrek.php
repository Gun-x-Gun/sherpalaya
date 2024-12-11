<?php

namespace App\Filament\Resources\TrekResource\Pages;

use App\Filament\Resources\TrekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrek extends EditRecord
{
    protected static string $resource = TrekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

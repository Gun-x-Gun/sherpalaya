<?php

namespace App\Filament\Resources\TrekResource\Pages;

use App\Filament\Resources\TrekResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewTrek extends ViewRecord
{
    protected static string $resource = TrekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

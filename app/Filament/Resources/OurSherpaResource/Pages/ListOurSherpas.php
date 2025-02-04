<?php

namespace App\Filament\Resources\OurSherpaResource\Pages;

use App\Filament\Resources\OurSherpaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurSherpas extends ListRecords
{
    protected static string $resource = OurSherpaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

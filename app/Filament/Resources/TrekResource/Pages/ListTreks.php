<?php

namespace App\Filament\Resources\TrekResource\Pages;

use App\Filament\Resources\TrekResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTreks extends ListRecords
{
    protected static string $resource = TrekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

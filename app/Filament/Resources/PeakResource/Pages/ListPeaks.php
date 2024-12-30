<?php

namespace App\Filament\Resources\PeakResource\Pages;

use App\Filament\Resources\PeakResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeaks extends ListRecords
{
    protected static string $resource = PeakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

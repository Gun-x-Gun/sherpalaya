<?php

namespace App\Filament\Resources\PeakResource\Pages;

use App\Filament\Resources\PeakResource;
use App\Traits\Filament\TranslatableListRecords;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeaks extends ListRecords
{
    use TranslatableListRecords;

    protected static string $resource = PeakResource::class;

    protected function getAdditionalHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

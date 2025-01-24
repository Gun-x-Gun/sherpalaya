<?php

namespace App\Filament\Resources\PeakResource\Pages;

use App\Filament\Resources\PeakResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPeak extends ViewRecord
{
    protected static string $resource = PeakResource::class;

    public function getTitle(): string
    {
        return $this->getRecord()->title; // Assuming the Region model has a "name" field
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\PeakResource\Pages;

use App\Filament\Resources\PeakResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeak extends EditRecord
{
    protected static string $resource = PeakResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

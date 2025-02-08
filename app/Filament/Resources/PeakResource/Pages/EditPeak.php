<?php

namespace App\Filament\Resources\PeakResource\Pages;

use App\Filament\Resources\PeakResource;
use App\Traits\Filament\TranslatableEditRecord;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeak extends EditRecord
{
    use TranslatableEditRecord;

    protected static string $resource = PeakResource::class;

    protected function getAdditionalHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

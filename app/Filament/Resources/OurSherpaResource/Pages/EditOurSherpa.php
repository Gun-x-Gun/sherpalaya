<?php

namespace App\Filament\Resources\OurSherpaResource\Pages;

use App\Filament\Resources\OurSherpaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurSherpa extends EditRecord
{
    protected static string $resource = OurSherpaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\DestinationResource\Pages;

use App\Filament\Resources\DestinationResource;
use App\Filament\Resources\DestinationResource\Widgets\DestinationMultiWidget;
use App\Filament\Resources\DestinationResource\Widgets\DestinationServiceTable;
use App\Filament\Resources\DestinationResource\Widgets\DestinationToursTable;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDestination extends ViewRecord
{
    protected static string $resource = DestinationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
    protected function getFooterWidgets(): array
    {
        return [
            DestinationMultiWidget::class,
        ];
    }
}

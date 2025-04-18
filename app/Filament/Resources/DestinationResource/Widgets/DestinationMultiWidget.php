<?php

namespace App\Filament\Resources\DestinationResource\Widgets;

use Filament\Widgets\Widget;
use Kenepa\MultiWidget\MultiWidget;

class DestinationMultiWidget extends MultiWidget
{
    public array $widgets = [
        DestinationToursTable::class,
        DestinationExpeditionTable::class,
        DestinationTrekTable::class,
    ];
}

<?php

namespace App\Filament\Resources\PeakResource\Pages;

use App\Filament\Resources\PeakResource;
use App\Traits\Filament\TranslatableCreateRecord;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePeak extends CreateRecord
{
    use TranslatableCreateRecord;
    protected static string $resource = PeakResource::class;
}

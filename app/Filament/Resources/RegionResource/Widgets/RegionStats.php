<?php

namespace App\Filament\Resources\RegionResource\Widgets;

use App\Filament\Resources\ExpeditionResource;
use App\Filament\Resources\PeakResource;
use App\Filament\Resources\TrekResource;
use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Trek;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Concerns\HasRecords;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RegionStats extends BaseWidget
{

    public ?Model $record = null;


    protected function getStats(): array
    {
        $region = $this->record->id;

        $expeditionCount = Expedition::where('region_id', $region)->count();
        $peakCount = Peak::where('region_id', $region)->count();
        $trekCount = Trek::where('region_id', $region)->count();
        return [
            Stat::make('Expeditions', $expeditionCount)
                ->description('')
                ->icon('heroicon-m-moon')
                ->url(ExpeditionResource::getUrl()),
            Stat::make('Peaks', $peakCount)
                ->description('')
                ->icon('heroicon-m-sun')
                ->url(PeakResource::getUrl()),
            Stat::make('Treks', $trekCount)
                ->description('')
                ->icon('heroicon-m-eye')
                ->url(TrekResource::getUrl()),
        ];
    }
}

<?php

namespace App\Filament\Resources\TourResource\Pages;

use App\Enums\TourType;
use App\Filament\Resources\TourResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListTours extends ListRecords
{
    protected static string $resource = TourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
{
    return [
        'all' => Tab::make('All'),
        'cycling' => Tab::make('Cycling')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', TourType::CYCLING)),
        'running' => Tab::make('Running')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', TourType::RUNNING)),
        'sightseeing' => Tab::make('Sight Seeing')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', TourType::SIGHTSEEING)),
        'photography' => Tab::make('Photography')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', TourType::PHOTOGRAPHY)),
        'cultural' => Tab::make('Cultural/Meditation')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', TourType::CULTURAL)),
        'others' => Tab::make('Others')
            ->modifyQueryUsing(fn (Builder $query) => $query->where('type', TourType::OTHERS)),
    ];
}
}

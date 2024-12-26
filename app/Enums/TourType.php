<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TourType: string implements HasLabel
{
    case SIGHTSEEING = 'sightseeing';
    case CYCLING = 'cycling';
    case RUNNING = 'running';
    case PHOTOGRAPHY = 'photography';
    case CULTURAL = 'cultural';
    case OTHERS = 'others';

    public function getLabel(): string
    {
        return match ($this){
            self::SIGHTSEEING => 'Sightseeing(Helicopter/Vehicle)',
            self::CYCLING => 'Cycling',
            self::RUNNING => 'Running',
            self::PHOTOGRAPHY => 'Photography',
            self::CULTURAL => 'Cultural/Meditation',
            self::OTHERS => 'Others',
        };
    }
}

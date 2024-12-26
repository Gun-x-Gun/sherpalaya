<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;


enum CategoryTypes: string implements HasLabel
{
    case TREK = 'trek';
    case EXPEDITION = 'expedition';
    case PEAK = 'peak';

    public function getLabel(): string
    {
        return match ($this){
            self::TREK => 'Trek',
            self::EXPEDITION => 'Expedition',
            self::PEAK => 'Peak',
        };
    }
}

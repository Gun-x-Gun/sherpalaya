<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;


enum ItineraryTypes: string implements HasLabel
{
    case FLIGHT = 'flight';
    case DRIVE = 'drive';
    case WALK = 'walk';
    case REST = 'rest';
    case BED_BREAKFAST = 'bed_breakfast';
    case HIMALAYA = 'himalaya';
    case ALTITUDE = 'altitude';

    public function getLabel(): string
    {
        return match ($this){
            self::FLIGHT => 'Flight',
            self::DRIVE => 'Drive',
            self::WALK => 'Walk',
            self::REST => 'Rest',
            self::BED_BREAKFAST => 'Bed and Breakfast',
            self::HIMALAYA => 'Himalaya',
            self::ALTITUDE => 'Altitude',
        };
    }

}

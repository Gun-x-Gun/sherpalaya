<?php

namespace App\Enums;
use Filament\Support\Contracts\HasLabel;


enum ItineraryTypes: string implements HasLabel
{
    case FLIGHT = 'flight';
    case DRIVE = 'drive';
    case TREK = 'trek';
    case TREK_HOURS = 'trek-hours';
    case REST = 'rest';
    case ACCOMODATION = 'accomodation';
    case HIMALAYA = 'himalaya';
    case ALTITUDE = 'altitude';
    case HELICOPTER = 'helicopter';
    case OTHERS = 'others';

    public function getLabel(): string
    {
        return match ($this){
            self::FLIGHT => 'Flight',
            self::DRIVE => 'Drive',
            self::TREK => 'Trek',
            self::TREK_HOURS => 'Trek Hours',
            self::REST => 'Rest',
            self::HELICOPTER => 'Helicopter',
            self::ACCOMODATION => 'Accomodation',
            self::HIMALAYA => 'Himalaya',
            self::ALTITUDE => 'Altitude',
            self::OTHERS => 'Others',
        };
    }

}

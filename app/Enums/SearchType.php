<?php

namespace App\Enums;

use App\Models\Destination;
use App\Models\Expedition;
use App\Models\Peak;
use App\Models\Trek;

enum SearchType: string
{
    case TREK = 'trek';
    case PEAK = 'peak';
    case EXPEDITION = 'expedition';
    case DESTINATION = 'destination';

    public function search(string $query){
        return match($this){
            self::TREK => Trek::search($query),
            self::PEAK => Peak::search($query),
            self::EXPEDITION => Expedition::search($query),
            self::DESTINATION => Destination::search($query),
        };
    }
}

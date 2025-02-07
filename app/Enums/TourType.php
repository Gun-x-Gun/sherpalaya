<?php

namespace App\Enums;

use App\Traits\TranslatableEnum;
use App\Contracts\EnumHasTranslation;

enum TourType: string implements EnumHasTranslation
{
    use TranslatableEnum;
    case SIGHTSEEING = 'sightseeing';
    case CYCLING = 'cycling';
    case RUNNING = 'running';
    case PHOTOGRAPHY = 'photography';
    case CULTURAL = 'cultural';
    case OTHERS = 'others';

    public static function getTranslationKey(): string {
        return 'enums.tour-type';
    }
}

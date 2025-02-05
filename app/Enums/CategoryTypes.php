<?php

namespace App\Enums;

use App\Contracts\EnumHasTranslation;
use App\Traits\TranslatableEnum;
use Filament\Support\Contracts\HasLabel;


enum CategoryTypes: string implements EnumHasTranslation
{
    use TranslatableEnum;

    case TREK = 'trek';
    case EXPEDITION = 'expedition';
    case PEAK = 'peak';


    public static function getTranslationKey(): string {
        return 'enums.category-type';
    }
}

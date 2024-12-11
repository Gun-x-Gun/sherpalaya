<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum TrekDifficulty: string implements HasLabel
{
    case EASY = 'easy';
    case MODERATE = 'moderate';
    case HARD = 'hard';
    case CHALLENGING = 'challenging';

    public function getLabel(): string
    {
        return match ($this){
            self::EASY => 'Easy',
            self::MODERATE => 'Moderate',
            self::HARD => 'Hard',
            self::CHALLENGING => 'Challenging',
        };
    }

}

<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;


enum CategoryTypes: string implements HasLabel
{
    case TREK = 'trek';
    case EXPEDITION = 'expedition';
    case PEAK = 'peak';

    public function getTranslatedLabel($locale): string
    {
        $translatedLabelKey = 'enums.category-type.' . $this->value;
        return __($translatedLabelKey, locale: $locale ?? 'en    ') ?? 'N/A';
    }

    public static function getTranslatedOptions($locale): array
    {
        $options = [];

        foreach (self::cases() as $case) {
            $options[$case->value] = self::getTranslatedOption($locale ?? 'en', $case) ?? 'N/A';
        }
        return $options;
    }

    public static function getTranslatedOption($locale, CategoryTypes|string $key): string
    {
        if (is_string($key)) {
            $key = CategoryTypes::from($key);
        }

        $translatedLabelKey = 'enums.category-type.' . $key->value;

        return __($translatedLabelKey, locale: $locale ?? 'en    ') ?? 'N/A';
    }

    public function getLabel(): string
    {
        return $this->getTranslatedLabel(app()->currentLocale() ?? 'en    ');
    }
}

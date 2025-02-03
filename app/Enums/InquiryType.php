<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum InquiryType: string implements HasLabel
{
    case BOOKING = 'booking';
    case INQUIRY = 'inquiry';

    public function getLabel(): ?string
    {
        return match($this){
            self::BOOKING => 'Booking',
            self::INQUIRY => 'Inquiry'
        };
    }
}

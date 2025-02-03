<?php

namespace App\View\Components\Booking;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class BookingSection extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public Model $bookingFor,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.booking.booking-section');
    }
}

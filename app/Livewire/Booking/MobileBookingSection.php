<?php

namespace App\Livewire\Booking;

use App\Enums\InquiryType;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class MobileBookingSection extends Component
{
    public Model $bookingFor;

    public string $fullName;
    public string $email;
    public string $message;


    public function addBooking()
    {
        $this->bookingFor->inquiries()->create([
            'full_name' => $this->fullName,
            'email' => $this->email,
            'message' => $this->message,
            'type' => InquiryType::BOOKING,
        ]);
    }

    public function addInquiry()
    {
        $this->bookingFor->inquiries()->create([
            'full_name' => $this->fullName,
            'email' => $this->email,
            'message' => $this->message,
            'type' => InquiryType::BOOKING,
        ]);
    }

    public function render()
    {
        return view('livewire.booking.mobile-booking-section');
    }
}

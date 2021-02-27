<?php

namespace App\Controllers;

use App\Controllers\BusController;

class SeatBookingController
{
    private int $totalSeats;
    private int $bookingQuantity;

    public function __construct(BusController $bus)
    {
        $this->totalSeats = $bus->getTotalSeats();
    }

    public function booking(int $bookingQuantity): string
    {
        $this->bookingQuantity = $bookingQuantity;
        $this->totalSeats -= $this->bookingQuantity;
        return "Successfully booked {$this->bookingQuantity} seats";
    }

    public function getBookingQuantity(): int
    {
        return $this->bookingQuantity ?? 0;
    }
}

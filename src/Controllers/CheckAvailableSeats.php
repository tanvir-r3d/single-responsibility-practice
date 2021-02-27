<?php

namespace App\Controllers;

use App\Controllers\BusController;
use App\Controllers\SeatBookingController;

class CheckAvailableSeats
{
    public function __construct(BusController $bus, SeatBookingController $seat)
    {
        $availableSeat = $bus->getTotalSeats() - $seat->getBookingQuantity();
        echo $availableSeat;
    }
}

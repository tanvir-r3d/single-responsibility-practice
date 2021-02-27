<?php
require_once __DIR__ . "/vendor/autoload.php";

use App\Controllers\BusController;
use App\Controllers\CheckAvailableSeats;
use App\Controllers\SeatBookingController;

$bus = new BusController('Unique Bus', 35);
$bookSeat = new SeatBookingController($bus);
$bookSeat->booking(3);
new CheckAvailableSeats($bus, $bookSeat);

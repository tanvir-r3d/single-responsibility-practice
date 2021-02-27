<?php

namespace App\Controllers;

class BusController
{
    public string $name;
    private int $totalSeats;

    public function __construct(string $name, int $totalSeats)
    {
        $this->name = $name;
        $this->totalSeats = $totalSeats;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTotalSeats(): int
    {
        return $this->totalSeats;
    }
}

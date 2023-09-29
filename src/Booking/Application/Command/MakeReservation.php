<?php

declare(strict_types=1);

namespace CompanyName\Booking\Application\Command;

use CompanyName\Shared\Application\CommandInterface;

class MakeReservation implements CommandInterface
{
    public function __construct(private \DateTimeImmutable $reservationDate, private float $duration)
    {
    }

    public function getReservationDate(): \DateTimeImmutable
    {
        return $this->reservationDate;
    }

    public function getDuration(): float
    {
        return $this->duration;
    }
}

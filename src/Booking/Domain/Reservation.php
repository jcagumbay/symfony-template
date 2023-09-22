<?php

declare(strict_types=1);

namespace CompanyName\Booking\Domain;

use DateTime;
use DateTimeImmutable;

class Reservation
{
    private DateTime $creationDate;
    private DateTime $reservationDate;
    private float $duration;

    private ?int $id = null;

    public function __construct(DateTimeImmutable $reservationDate, Duration $duration)
    {
        // band aid solution. We can introduce an immutable type
        $this->reservationDate = DateTime::createFromImmutable($reservationDate);
        $this->duration = $duration->getValue();
        $this->creationDate = new DateTime();
    }

    public function getReservationDate(): DateTime
    {
        return $this->reservationDate;
    }
}
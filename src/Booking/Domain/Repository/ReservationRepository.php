<?php

declare(strict_types=1);

namespace CompanyName\Booking\Domain\Repository;

use CompanyName\Booking\Domain\Reservation;

interface ReservationRepository
{
    public function save(Reservation $reservation): void;

    /**
     * @return Reservation[]
     */
    public function all(): array;
}

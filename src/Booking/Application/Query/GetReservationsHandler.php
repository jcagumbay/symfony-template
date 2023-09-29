<?php

declare(strict_types=1);

namespace CompanyName\Booking\Application\Query;

use CompanyName\Booking\Domain\Repository\ReservationRepository;
use CompanyName\Booking\Domain\Reservation;

class GetReservationsHandler
{
    public function __construct(private ReservationRepository $reservationRepository)
    {
    }

    public function __invoke(GetReservations $command)
    {
        $reservations = $this->reservationRepository->all();

        return array_map(
            fn (Reservation $reservation) => $reservation->getReservationDate()->format(\DateTimeInterface::ATOM),
            $reservations
        );
    }
}

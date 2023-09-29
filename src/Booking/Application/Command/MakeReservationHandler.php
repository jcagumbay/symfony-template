<?php

declare(strict_types=1);

namespace CompanyName\Booking\Application\Command;

use CompanyName\Booking\Domain\Duration;
use CompanyName\Booking\Domain\Repository\ReservationRepository;
use CompanyName\Booking\Domain\Reservation;

class MakeReservationHandler
{
    public function __construct(private ReservationRepository $reservationRepository)
    {
    }

    public function __invoke(MakeReservation $command)
    {
        $reservation = new Reservation($command->getReservationDate(), new Duration($command->getDuration()));

        $this->reservationRepository->save($reservation);
    }
}

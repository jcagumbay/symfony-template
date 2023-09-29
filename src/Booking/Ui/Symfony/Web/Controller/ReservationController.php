<?php

declare(strict_types=1);

namespace CompanyName\Booking\Ui\Symfony\Web\Controller;

use CompanyName\Booking\Application\Command\MakeReservation;
use CompanyName\Booking\Application\Query\GetReservations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Messenger\Stamp\HandledStamp;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    #[Route('/reservation')]
    public function number(MessageBusInterface $commandBus, MessageBusInterface $queryBus): Response
    {
        $commandBus->dispatch(new MakeReservation(new \DateTimeImmutable(), 2.0));

        $reservations = $queryBus
            ->dispatch(new GetReservations())
            ->last(HandledStamp::class)
            ->getResult();

        return $this->render('reservation/reservations.html.twig', [
            'reservationDates' => $reservations,
        ]);
    }
}

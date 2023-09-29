<?php

declare(strict_types=1);

namespace CompanyName\Booking\Infrastructure\Doctrine\Repository;

use CompanyName\Booking\Domain\Repository\ReservationRepository;
use CompanyName\Booking\Domain\Reservation;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class DoctrineReservationRepository extends EntityRepository implements ReservationRepository
{
    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em, new ClassMetadata(Reservation::class));
    }

    public function save(Reservation $reservation): void
    {
        $this->getEntityManager()->persist($reservation);
        $this->getEntityManager()->flush();
    }

    public function all(): array
    {
        return $this->findBy([]);
    }
}

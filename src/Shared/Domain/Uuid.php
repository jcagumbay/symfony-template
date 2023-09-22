<?php

declare(strict_types=1);

namespace CompanyName\Shared\Domain;

use CompanyName\Booking\Domain\Exception\InvalidDurationException;

class Uuid
{
    private float $value;

    public function __construct(float $value)
    {
        if ($value < 0) {
            throw new InvalidDurationException();
        }

        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }
}
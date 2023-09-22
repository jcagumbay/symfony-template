<?php

declare(strict_types=1);

namespace CompanyName\Booking\Domain;

use CompanyName\Booking\Domain\Exception\InvalidDurationException;

class Duration
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
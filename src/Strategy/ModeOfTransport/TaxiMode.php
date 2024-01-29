<?php

declare(strict_types=1);

namespace Strategy\ModeOfTransport;

class TaxiMode implements ModeOfTransportInterface
{
    private const TARIFF_PER_KM = 5;
    private const SPEED_KM_PER_H = 40;

    public function __construct(
        private readonly float $mileage,
    ) {}

    public function getCost(): float
    {
        return round(self::TARIFF_PER_KM * $this->mileage, 2);
    }

    public function getName(): string
    {
        return 'Taxi';
    }

    public function getSpeedInCity(): float
    {
        return self::SPEED_KM_PER_H;
    }
}

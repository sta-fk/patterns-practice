<?php

declare(strict_types=1);

namespace Strategy\ModeOfTransport;

class BicycleMode implements ModeOfTransportInterface
{
    private const TARIFF_PER_H = 30;
    private const SPEED_KM_PER_H = 21;

    public function __construct(
        private readonly float $mileage,
    ) {}

    public function getCost(): float
    {
        return round(($this->mileage / self::SPEED_KM_PER_H) * self::TARIFF_PER_H, 2);
    }

    public function getName(): string
    {
        return 'Bicycle';
    }

    public function getSpeedInCity(): float
    {
        return self::SPEED_KM_PER_H;
    }
}

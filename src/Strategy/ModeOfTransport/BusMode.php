<?php

declare(strict_types=1);

namespace Strategy\ModeOfTransport;

class BusMode implements ModeOfTransportInterface
{
    private const TARIFF_PER_RIDE = 10;
    private const SPEED_KM_PER_H = 11;

    public function getCost(): float
    {
        return self::TARIFF_PER_RIDE;
    }

    public function getName(): string
    {
        return 'Bus';
    }

    public function getSpeedInCity(): float
    {
        return  self::SPEED_KM_PER_H;
    }
}

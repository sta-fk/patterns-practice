<?php

declare(strict_types=1);

namespace Strategy;

use Strategy\ModeOfTransport\ModeOfTransportInterface;

class OnlineClientApplication extends AbstractApplication
{
    public function __construct(
        private readonly string $clientName,
        string $arrivalPoint,
        string $destination,
        float $mileage,
        ModeOfTransportInterface $rideWay
    ) {
        $this->arrivalPoint = $arrivalPoint;
        $this->destination = $destination;
        $this->modeOfTransport = $rideWay;
        $this->mileage = $mileage;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }
}

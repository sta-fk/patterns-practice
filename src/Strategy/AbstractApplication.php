<?php

declare(strict_types=1);

namespace Strategy;

use Strategy\ModeOfTransport\ModeOfTransportInterface;

abstract class AbstractApplication
{
    protected string $arrivalPoint;
    protected string $destination;
    protected ModeOfTransportInterface $modeOfTransport;
    protected float $mileage;

    public function setModeOfTransport(ModeOfTransportInterface $modeOfTransport): void
    {
        $this->modeOfTransport = $modeOfTransport;
    }

    public function getArrivalPoint(): string
    {
        return $this->arrivalPoint;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getTransportName(): string
    {
        return $this->modeOfTransport->getName();
    }

    public function getTransportCost(): string
    {
        return sprintf('%s$', $this->modeOfTransport->getCost());
    }

    public function getDuration(): string
    {
        $hours = $this->mileage / $this->modeOfTransport->getSpeedInCity();
        $minutes =  $hours * 60;

        if ($hours < 1) {
            return round($minutes) . ' minutes';
        }

        return  intval($hours). ' hours ' . ($hours - floor($hours)) * 60 . ' minutes';
    }
}

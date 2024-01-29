<?php

namespace Strategy\ModeOfTransport;

interface ModeOfTransportInterface
{
    public function getCost(): float;
    public function getName(): string;
    public function getSpeedInCity(): float;
}

<?php

declare(strict_types=1);

namespace Decorator\Superpower;

use Decorator\AbstractSuperHeroDecorator;

class SuperPower extends AbstractSuperHeroDecorator
{
    public function getDescription(): string
    {
        return $this->superHero->getDescription() . ' with power';
    }

    public function getChanceOfSurvival(): int
    {
        return $this->superHero->getChanceOfSurvival() + 4;
    }
}

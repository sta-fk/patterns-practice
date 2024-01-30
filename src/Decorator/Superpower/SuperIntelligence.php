<?php

declare(strict_types=1);

namespace Decorator\Superpower;

use Decorator\AbstractSuperHeroDecorator;

class SuperIntelligence extends AbstractSuperHeroDecorator
{
    public function getDescription(): string
    {
        return $this->superHero->getDescription() . ' with intelligence';
    }

    public function getChanceOfSurvival(): int
    {
        return $this->superHero->getChanceOfSurvival() + 7;
    }
}

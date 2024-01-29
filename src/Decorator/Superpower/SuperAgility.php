<?php

declare(strict_types=1);

namespace Decorator\Superpower;

use Decorator\AbstractSuperHeroDecorator;

class SuperAgility extends AbstractSuperHeroDecorator
{
    public function getDescription(): string
    {
        return $this->superHero->getDescription() . ' with agility';
    }

    public function getChanceOfSurvival(): int
    {
        return $this->superHero->getChanceOfSurvival() + 3;
    }
}

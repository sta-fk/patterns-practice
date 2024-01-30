<?php

declare(strict_types=1);

namespace Decorator\SuperHero;

use Decorator\SuperHeroInterface;

class RedSuperHero implements SuperHeroInterface
{
    public function getDescription(): string
    {
        return 'Red hero';
    }

    public function getChanceOfSurvival(): int
    {
        return 52;
    }
}

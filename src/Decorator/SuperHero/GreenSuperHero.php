<?php

declare(strict_types=1);

namespace Decorator\SuperHero;

use Decorator\SuperHeroInterface;

class GreenSuperHero implements SuperHeroInterface
{
    public function getDescription(): string
    {
        return 'Green hero';
    }

    public function getChanceOfSurvival(): int
    {
        return 50;
    }
}

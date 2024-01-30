<?php

declare(strict_types=1);

namespace Decorator;

abstract class AbstractSuperHeroDecorator implements SuperHeroInterface
{
    protected SuperHeroInterface $superHero;

    public function __construct(SuperHeroInterface $superHero)
    {
        $this->superHero = $superHero;
    }

    abstract public function getDescription(): string;

    abstract public function getChanceOfSurvival(): int;
}

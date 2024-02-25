<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\Design;

use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;

class DustJacket implements DesignInterface
{
    private const DESCRIPTION = 'An alternative to paperback is the glossy cover, otherwise known as a dust cover';

    public function getType(): DesignBookType
    {
        return DesignBookType::DustJacket;
    }

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}

<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\Design;

use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;

class Hardcover implements DesignInterface
{
    private const DESCRIPTION = 'Hardcover books have a stiff binding';

    public function getType(): DesignBookType
    {
        return DesignBookType::Hardcover;
    }

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}

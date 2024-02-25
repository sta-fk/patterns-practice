<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\Design;

use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;

class Paperback implements DesignInterface
{
    private const DESCRIPTION = 'Paperback books have cheaper, flexible covers which tend to be less durable.';

    public function getType(): DesignBookType
    {
        return DesignBookType::Paperback;
    }

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}

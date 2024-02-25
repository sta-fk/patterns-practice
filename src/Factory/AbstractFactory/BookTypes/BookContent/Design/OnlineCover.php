<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\Design;

use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;

class OnlineCover implements DesignInterface
{
    private const DESCRIPTION = 'Image';

    public function getType(): DesignBookType
    {
        return DesignBookType::OnlineCover;
    }

    public function getDescription(): string
    {
        return self::DESCRIPTION;
    }
}

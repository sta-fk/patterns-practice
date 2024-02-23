<?php

namespace Factory\AbstractFactory\BookTypes\BookContent;

use Factory\AbstractFactory\BookTypes\BookContent\Design\DesignBookType;

interface DesignInterface
{
    public function getType(): DesignBookType;
    public function getDescription(): string;
}

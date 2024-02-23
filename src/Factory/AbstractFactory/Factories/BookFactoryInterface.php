<?php

namespace Factory\AbstractFactory\Factories;

use Factory\AbstractFactory\BookTypes\BookContent\Design\DesignBookType;
use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;
use Factory\AbstractFactory\BookTypes\BookContent\Format\BookFormat;
use Factory\AbstractFactory\BookTypes\BookContent\FormatInterface;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlockInterface;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\InfoBlockType;

interface BookFactoryInterface
{
    public function createInfoBlock(InfoBlockType $type): InfoBlockInterface;
    public function createFormat(BookFormat $format): FormatInterface;
    public function createDesign(DesignBookType $type): DesignInterface;
}

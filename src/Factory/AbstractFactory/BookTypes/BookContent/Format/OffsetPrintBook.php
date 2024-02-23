<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\Format;

use Factory\AbstractFactory\BookTypes\BookContent\FormatInterface;

class OffsetPrintBook implements FormatInterface
{
    public function getType(): BookFormat
    {
        return BookFormat::OffsetPrinted;
    }
}

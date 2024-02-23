<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookFactory;

use Factory\FactoryMethod\BookTypes\BookType;
use Factory\FactoryMethod\BookTypes\DigitallyPrintBook;
use Factory\FactoryMethod\BookTypes\OffsetPrintBook;
use Factory\FactoryMethod\BookTypes\AbstractBook;


class PrintBookFactory extends AbstractBookFactory
{
    public function create(BookType $type): AbstractBook
    {
        return match ($type) {
            BookType::OffsetPrintedBook => new OffsetPrintBook(),
            BookType::DigitallyPrinted => new DigitallyPrintBook(),
            default => throw new \RuntimeException( 'Unexpected match value'),
        };
    }
}

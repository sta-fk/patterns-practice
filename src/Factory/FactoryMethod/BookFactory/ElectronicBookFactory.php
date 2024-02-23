<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookFactory;

use Factory\FactoryMethod\BookTypes\BookType;
use Factory\FactoryMethod\BookTypes\ElectronicBookOnMedia;
use Factory\FactoryMethod\BookTypes\OnlineElectronicBook;
use Factory\FactoryMethod\BookTypes\AbstractBook;

class ElectronicBookFactory extends AbstractBookFactory
{
    public function create(BookType $type): AbstractBook
    {
        return match ($type) {
            BookType::ElectronicOnMedia => new ElectronicBookOnMedia(),
            BookType::OnlineElectronic => new OnlineElectronicBook(),
            default => throw new \RuntimeException( 'Unexpected match value'),
        };
    }
}

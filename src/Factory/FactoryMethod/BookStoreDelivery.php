<?php

declare(strict_types=1);

namespace Factory\FactoryMethod;

use Factory\FactoryMethod\BookFactory\AbstractBookFactory;
use Factory\FactoryMethod\BookTypes\BookType;

class BookStoreDelivery
{
    private AbstractBookFactory $factory;

    public function assemble(BookType $type, array $data): void
    {
        $this->factory->getBook($type, $data);
    }

    public function setBookFactory(AbstractBookFactory $factory): void
    {
        $this->factory = $factory;
    }
}

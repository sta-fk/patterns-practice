<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookFactory;

use Factory\FactoryMethod\BookTypes\BookType;
use Factory\FactoryMethod\BookTypes\AbstractBook;

abstract class AbstractBookFactory
{
    abstract public function create(BookType $type): AbstractBook;

    public function getBook(BookType $type, array $data): void
    {
        $book = $this->create($type);
        $book->fill($data);
        $book->display();
    }
}

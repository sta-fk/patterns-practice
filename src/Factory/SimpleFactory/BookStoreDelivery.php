<?php

declare(strict_types=1);

namespace Factory\SimpleFactory;

use Factory\SimpleFactory\BookTypes\BookType;

readonly class BookStoreDelivery
{
    public function __construct(
        private BookFactory $factory,
    ) {}

    public function assemble(BookType $type, array $data): void
    {
        $book = $this->factory->create($type);
        $book->fill($data);
        $book->display();
    }
}

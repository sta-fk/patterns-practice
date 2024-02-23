<?php

declare(strict_types=1);

namespace Factory\SimpleFactory;

use Factory\SimpleFactory\BookTypes\AbstractBook;
use Factory\SimpleFactory\BookTypes\AudioBook;
use Factory\SimpleFactory\BookTypes\BookType;
use Factory\SimpleFactory\BookTypes\ElectronicBook;
use Factory\SimpleFactory\BookTypes\PrintBook;

class BookFactory
{
    public function create(BookType $type): AbstractBook
    {
        return match ($type) {
            BookType::Audio => new AudioBook(),
            BookType::Electronic => new ElectronicBook(),
            BookType::Print => new PrintBook(),
        };
    }
}

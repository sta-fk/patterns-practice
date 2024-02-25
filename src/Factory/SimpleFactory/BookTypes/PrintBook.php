<?php

declare(strict_types=1);

namespace Factory\SimpleFactory\BookTypes;

class PrintBook extends AbstractBook
{
    public function getType(): BookType
    {
        return BookType::Print;
    }
}

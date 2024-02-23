<?php

declare(strict_types=1);

namespace Output\FactoryPatternControl;

use Factory\SimpleFactory\BookFactory;
use Factory\SimpleFactory\BookStoreDelivery;
use Factory\SimpleFactory\BookTypes\BookType;
use Output\PatternControlInterface;

class SimpleFactoryPatternControl implements PatternControlInterface
{
    public function execute(): void
    {
        echo '<h2>Programming idiom Simple Factory</h2>';

        $bookStoreDelivery = new BookStoreDelivery(new BookFactory());
        $bookStoreDelivery->assemble(BookType::Print, BookMock::SHORT_PRINT_BOOK);
        echo '<br/>';
        $bookStoreDelivery->assemble(BookType::Electronic, BookMock::SHORT_E_BOOK);
    }
}

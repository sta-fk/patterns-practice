<?php

declare(strict_types=1);

namespace Output\FactoryPatternControl;

use Factory\FactoryMethod\BookFactory\AbstractBookFactory;
use Factory\FactoryMethod\BookFactory\AudioBookFactory;
use Factory\FactoryMethod\BookFactory\PrintBookFactory;
use Factory\FactoryMethod\BookStoreDelivery;
use Factory\FactoryMethod\BookTypes\BookType;
use Output\PatternControlInterface;

class FactoryMethodPatternControl implements PatternControlInterface
{
    private BookStoreDelivery $bookStoreDelivery;

    public function execute(): void
    {
        echo '<h2>Design pattern Factory method</h2>';

        $this->initialiseBookStoreDelivery();
        $this->bookStoreDelivery->setBookFactory(new AudioBookFactory());
        $this->bookStoreDelivery->assemble(BookType::OnlineAudio, BookMock::SHORT_AUDIO_BOOK);
        echo '<br/>';

        $this->bookStoreDelivery->setBookFactory(new PrintBookFactory());
        $this->bookStoreDelivery->assemble(BookType::DigitallyPrinted, BookMock::SHORT_PRINT_BOOK);
        echo '<br/>';
        $this->bookStoreDelivery->assemble(BookType::OffsetPrintedBook, BookMock::SHORT_PRINT_BOOK);
        echo '<br/>';
    }

    private function initialiseBookStoreDelivery(): void
    {
        $this->bookStoreDelivery = new BookStoreDelivery();
    }
}

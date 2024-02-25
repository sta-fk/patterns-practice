<?php

declare(strict_types=1);

namespace Output\FactoryPatternControl;

use Factory\AbstractFactory\BookStoreDelivery;
use Factory\AbstractFactory\BookTypes\BookContent\Design\DesignBookType;
use Factory\AbstractFactory\BookTypes\BookContent\Format\BookFormat;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\InfoBlockType;
use Factory\AbstractFactory\BookTypes\BookType;
use Output\PatternControlInterface;

class AbstractFactoryPatternControl implements PatternControlInterface
{
    private BookStoreDelivery $bookStoreDelivery;

    public function execute(): void
    {
        echo '<h2>Design pattern Abstract factory</h2>';
        $this->initialiseBookStoreDelivery();

        $this->bookStoreDelivery->specifyDataForCreatingBook(
            InfoBlockType::Advanced,
            BookFormat::OffsetPrinted,
            DesignBookType::Hardcover,
        );
        $this->bookStoreDelivery->assemble(BookType::Print, BookMock::ADVANCED_PRINT_BOOK);
        echo '<br/>';

        $this->bookStoreDelivery->specifyDataForCreatingBook(
            InfoBlockType::Advanced,
            BookFormat::OnlineElectronic,
            DesignBookType::OnlineCover,
        );
        $this->bookStoreDelivery->assemble(BookType::Electronic, BookMock::ADVANCED_E_BOOK);
        echo '<br/>';

        $this->bookStoreDelivery->specifyDataForCreatingBook(
            InfoBlockType::Short,
            BookFormat::AudioOnMedia,
            DesignBookType::OnlineCover,
        );
        $this->bookStoreDelivery->assemble(BookType::Audio, BookMock::SHORT_AUDIO_BOOK);
    }

    private function initialiseBookStoreDelivery(): void
    {
        $this->bookStoreDelivery = new BookStoreDelivery();
    }
}

<?php

declare(strict_types=1);

namespace Factory\AbstractFactory;

use Factory\AbstractFactory\BookTypes\AudioBook;
use Factory\AbstractFactory\BookTypes\BookContent\Design\DesignBookType;
use Factory\AbstractFactory\BookTypes\BookContent\Format\BookFormat;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\InfoBlockType;
use Factory\AbstractFactory\BookTypes\ElectronicBook;
use Factory\AbstractFactory\BookTypes\PrintBook;
use Factory\AbstractFactory\Factories\AudioBookFactory;
use Factory\AbstractFactory\Factories\ElectronicBookFactory;
use Factory\AbstractFactory\Factories\PrintBookFactory;
use Factory\AbstractFactory\BookTypes\BookType;

class BookStoreDelivery
{
    private InfoBlockType $infoBlockType;
    private BookFormat $format;
    private DesignBookType $designBookType;

    public function specifyDataForCreatingBook(
        InfoBlockType $infoBlockType,
        BookFormat $format,
        DesignBookType $designBookType,
    ): void {
        $this->infoBlockType = $infoBlockType;
        $this->format = $format;
        $this->designBookType = $designBookType;
    }

    public function assemble(BookType $type, array $data): void
    {
        $book = match ($type) {
            BookType::Print => self::getPrintBook(),
            BookType::Audio => self::getAudioBook(),
            BookType::Electronic => self::getElectronicBook(),
        };

        $book->create($this->infoBlockType, $this->format, $this->designBookType);
        $book->fillOutInfoBlock($data);
        $book->displayInfo();
    }

    private static function getPrintBook(): PrintBook
    {
        return new PrintBook(new PrintBookFactory());
    }

    private static function getAudioBook(): AudioBook
    {
        return new AudioBook(new AudioBookFactory());
    }

    private static function getElectronicBook(): ElectronicBook
    {
        return new ElectronicBook(new ElectronicBookFactory());
    }
}

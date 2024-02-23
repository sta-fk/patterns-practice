<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes;

use Factory\AbstractFactory\BookTypes\BookContent\Design\DesignBookType;
use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;
use Factory\AbstractFactory\BookTypes\BookContent\Format\BookFormat;
use Factory\AbstractFactory\BookTypes\BookContent\FormatInterface;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\InfoBlockType;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlockInterface;
use Factory\AbstractFactory\Factories\BookFactoryInterface;

abstract class AbstractBook
{
    protected InfoBlockInterface $infoBlock;
    protected FormatInterface $format;
    protected DesignInterface $design;

    public function __construct(
        private readonly BookFactoryInterface $factory,
    ) {}

    public function create(
        InfoBlockType $infoBlockType,
        BookFormat $format,
        DesignBookType $designBookType,
    ): void {
        $this->infoBlock = $this->factory->createInfoBlock($infoBlockType);
        $this->format = $this->factory->createFormat($format);
        $this->design = $this->factory->createDesign($designBookType);
    }

    public function fillOutInfoBlock(array $data): void
    {
        $this->infoBlock->fill($data);
    }

    public function displayInfo(): void
    {
        echo '<b>' . $this->format->getType()->value . '</b><br/>';
        $this->infoBlock->display();
        echo 'Cover: ' . $this->design->getType()->value . '<br/>';
        echo 'Cover description: ' . $this->design->getDescription() . '<br/>';
    }
}

<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookTypes;

class OnlineElectronicBook extends AbstractBook
{
    public function getType(): BookType
    {
        return BookType::OnlineElectronic;
    }
}

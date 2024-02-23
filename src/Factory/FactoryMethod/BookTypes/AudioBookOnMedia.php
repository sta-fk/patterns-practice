<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookTypes;

class AudioBookOnMedia extends AbstractBook
{
    public function getType(): BookType
    {
        return BookType::AudioOnMedia;
    }
}

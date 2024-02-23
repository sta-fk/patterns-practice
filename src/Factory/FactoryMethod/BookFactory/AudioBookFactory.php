<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookFactory;

use Factory\FactoryMethod\BookTypes\AudioBookOnMedia;
use Factory\FactoryMethod\BookTypes\BookType;
use Factory\FactoryMethod\BookTypes\OnlineAudioBook;
use Factory\FactoryMethod\BookTypes\AbstractBook;

class AudioBookFactory extends AbstractBookFactory
{
    public function create(BookType $type): AbstractBook
    {
        return match ($type) {
            BookType::AudioOnMedia => new AudioBookOnMedia(),
            BookType::OnlineAudio => new OnlineAudioBook(),
            default => throw new \RuntimeException( 'Unexpected match value'),
        };
    }
}

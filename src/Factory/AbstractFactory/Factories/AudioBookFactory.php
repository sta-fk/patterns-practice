<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\Factories;

use Factory\AbstractFactory\BookTypes\BookContent\Design\DesignBookType;
use Factory\AbstractFactory\BookTypes\BookContent\Design\DustJacket;
use Factory\AbstractFactory\BookTypes\BookContent\Design\Hardcover;
use Factory\AbstractFactory\BookTypes\BookContent\Design\OnlineCover;
use Factory\AbstractFactory\BookTypes\BookContent\Design\Paperback;
use Factory\AbstractFactory\BookTypes\BookContent\DesignInterface;
use Factory\AbstractFactory\BookTypes\BookContent\Format\AudioBookOnMedia;
use Factory\AbstractFactory\BookTypes\BookContent\Format\BookFormat;
use Factory\AbstractFactory\BookTypes\BookContent\Format\DigitallyPrintBook;
use Factory\AbstractFactory\BookTypes\BookContent\Format\OffsetPrintBook;
use Factory\AbstractFactory\BookTypes\BookContent\Format\OnlineAudioBook;
use Factory\AbstractFactory\BookTypes\BookContent\FormatInterface;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlockInterface;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\AdvancedInfoBlockBlock;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\InfoBlockType;
use Factory\AbstractFactory\BookTypes\BookContent\InfoBlock\ShortInfoBlockBlock;

class AudioBookFactory implements BookFactoryInterface
{
    public function createInfoBlock(InfoBlockType $type): InfoBlockInterface
    {
        return match($type) {
            InfoBlockType::Short => new ShortInfoBlockBlock(),
            InfoBlockType::Advanced => new AdvancedInfoBlockBlock(),
        };
    }

    public function createFormat(BookFormat $format): FormatInterface
    {
        return match($format) {
            BookFormat::OnlineAudio => new OnlineAudioBook(),
            BookFormat::AudioOnMedia => new AudioBookOnMedia(),
            default => throw new \RuntimeException( 'Unexpected match value'),
        };
    }

    public function createDesign(DesignBookType $type): DesignInterface
    {
        return match($type) {
            DesignBookType::OnlineCover => new OnlineCover(),
            default => throw new \RuntimeException( 'Unexpected match value'),
        };
    }
}

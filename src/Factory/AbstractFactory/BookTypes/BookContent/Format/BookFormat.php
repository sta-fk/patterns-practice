<?php

namespace Factory\AbstractFactory\BookTypes\BookContent\Format;

enum BookFormat: string
{
    case DigitallyPrinted = 'Digitally printed book';
    case OffsetPrinted = 'Offset printed book';
    case ElectronicOnMedia = 'E-book on electronic media';
    case OnlineElectronic = 'E-book online';
    case AudioOnMedia = 'Audio book on electronic media';
    case OnlineAudio = 'Audio book online';
}

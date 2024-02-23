<?php

namespace Factory\FactoryMethod\BookTypes;

enum BookType: string
{
    case DigitallyPrinted = 'Digitally printed book';
    case OffsetPrintedBook = 'Offset printed book';
    case ElectronicOnMedia = 'E-book on electronic media';
    case OnlineElectronic = 'E-book online';
    case AudioOnMedia = 'Audio book on electronic media';
    case OnlineAudio = 'Audio book online';
}

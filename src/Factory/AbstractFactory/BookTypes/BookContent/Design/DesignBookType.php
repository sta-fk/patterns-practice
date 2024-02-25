<?php

namespace Factory\AbstractFactory\BookTypes\BookContent\Design;

enum DesignBookType: string
{
    /** For print books */
    case Hardcover = 'Hardcover';
    case Paperback = 'Paperback';
    case DustJacket = 'Dust jacket';

    /** For audio/electronic books */
    case OnlineCover = 'Online cover';
}

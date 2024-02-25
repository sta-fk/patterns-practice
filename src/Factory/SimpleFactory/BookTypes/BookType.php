<?php

namespace Factory\SimpleFactory\BookTypes;

enum BookType: string
{
    case Electronic = 'E-Book';
    case Audio = 'Audio book';
    case Print = 'Print book';
}

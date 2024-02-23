<?php

namespace Factory\AbstractFactory\BookTypes;

enum BookType: string
{
    case Electronic = 'E-Book';
    case Audio = 'Audio book';
    case Print = 'Print book';
}

<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\InfoBlock;

enum InfoBlockType: string
{
    case Short = 'Short';
    case Advanced = 'Advanced';
}

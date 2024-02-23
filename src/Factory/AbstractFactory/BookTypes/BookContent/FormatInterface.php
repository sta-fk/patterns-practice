<?php

namespace Factory\AbstractFactory\BookTypes\BookContent;

use Factory\AbstractFactory\BookTypes\BookContent\Format\BookFormat;

interface FormatInterface
{
    public function getType(): BookFormat;
}

<?php

namespace Factory\AbstractFactory\BookTypes\BookContent;

interface InfoBlockInterface
{
    public function display(): void;
    public function fill(array $data): void;
}

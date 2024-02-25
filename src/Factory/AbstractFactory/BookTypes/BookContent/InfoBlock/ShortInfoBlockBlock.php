<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\InfoBlock;

use Factory\AbstractFactory\BookTypes\BookContent\InfoBlockInterface;

class ShortInfoBlockBlock implements InfoBlockInterface
{
    private string $title;
    private string $author;
    private string $language;
    private string $genre;

    public function display(): void
    {
        echo 'Title: ' . $this->title . '<br/>';
        echo 'Author: ' . $this->author . '<br/>';
        echo 'Genre: ' . $this->genre . '<br/>';
        echo 'Language: ' . $this->language . '<br/>';
    }

    public function fill(array $data): void
    {
        $this->author = $data['author'];
        $this->language = $data['language'];
        $this->genre = $data['genre'];
        $this->title = $data['title'];
    }
}

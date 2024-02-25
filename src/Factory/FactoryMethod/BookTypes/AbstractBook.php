<?php

declare(strict_types=1);

namespace Factory\FactoryMethod\BookTypes;

abstract class AbstractBook
{
    protected string $title;
    protected string $author;
    protected string $language;
    protected string $genre;

    abstract public function getType(): BookType;

    public function fill(array $data): void
    {
        $this->author = $data['author'];
        $this->language = $data['language'];
        $this->genre = $data['genre'];
        $this->title = $data['title'];
    }

    public function display(): void
    {
        echo '<b>' . $this->getType()->value . '</b><br/>';
        echo 'Title: ' . $this->title . '<br/>';
        echo 'Author: ' . $this->author . '<br/>';
        echo 'Genre: ' . $this->genre . '<br/>';
        echo 'Language: ' . $this->language . '<br/>';
    }
}

<?php

declare(strict_types=1);

namespace Factory\AbstractFactory\BookTypes\BookContent\InfoBlock;

use Factory\AbstractFactory\BookTypes\BookContent\InfoBlockInterface;

class AdvancedInfoBlockBlock implements InfoBlockInterface
{
    private string $title;
    private string $author;
    private string $language;
    private string $genre;
    private string $country;
    private string $originLanguage;
    private bool $isSeries = false;
    private int $countSeries;
    private string $seriesName;
    private string $criticsAssessment;

    public function display(): void
    {
        echo 'Title: ' . $this->title . '<br/>';
        echo 'Author: ' . $this->author . '<br/>';
        echo 'Genre: ' . $this->genre . '<br/>';
        echo 'Language: ' . $this->language . '<br/>';
        echo 'Country: ' . $this->country . '<br/>';
        echo 'Origin language: ' . $this->originLanguage . '<br/>';

        if ($this->isSeries) {
            echo 'Book in the series: ' . $this->seriesName . '<br/>';
            echo 'Number of books in the series: ' . $this->countSeries . '<br/>';
        }

        echo 'Critics\' assessment: ' . $this->criticsAssessment . '<br/>';
    }

    public function fill(array $data): void
    {
        $this->author = $data['author'];
        $this->language = $data['language'];
        $this->genre = $data['genre'];
        $this->title = $data['title'];
        $this->country = $data['country'];
        $this->originLanguage = $data['originLanguage'];
        $this->isSeries = $data['isSeries'];
        $this->criticsAssessment = $data['criticsAssessment'];

        if ($this->isSeries) {
            $this->countSeries = $data['countSeries'];
            $this->seriesName = $data['seriesName'];
        }
    }
}

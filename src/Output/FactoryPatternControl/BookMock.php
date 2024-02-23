<?php

namespace Output\FactoryPatternControl;

final class BookMock
{
    public const SHORT_E_BOOK = [
        'author' => 'Stendhal',
        'title' => 'The Red and the Black',
        'genre' => 'novel',
        'language' => 'french',
    ];

    public const SHORT_PRINT_BOOK = [
        'author' => 'Jane Austen',
        'title' => 'Pride and Prejudice',
        'genre' => 'novel',
        'language' => 'english'
    ];

    public const SHORT_AUDIO_BOOK = [
        'author' => 'Stendhal',
        'title' => 'The Charterhouse of Parma',
        'genre' => 'novel',
        'language' => 'french'
    ];

    public const ADVANCED_PRINT_BOOK = [
        'author' => 'J. K. Rowling',
        'title' => 'Harry Potter and the Chamber of Secrets',
        'genre' => 'fantasy',
        'language' => 'spanish',
        'country' => 'United Kingdom',
        'originLanguage' => 'english',
        'isSeries' => true,
        'countSeries' => 7,
        'seriesName' => 'Harry Potter',
        'criticsAssessment' => '*****',
    ];

    public const ADVANCED_E_BOOK = [
        'author' => 'Mark Twain',
        'title' => 'The Adventures of Tom Sawyer',
        'genre' => 'children\'s literature',
        'language' => 'english',
        'country' => 'United States',
        'originLanguage' => 'english',
        'isSeries' => false,
        'criticsAssessment' => '*****',
    ];
}

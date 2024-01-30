<?php

declare(strict_types=1);

namespace Output;

class BaseHtmlControl implements PatternControlInterface
{
    public function execute(): void
    {
        echo '<h1>Hello world</h1>';
    }

    /**
     * Available colors
     * #27F28D | #27D0F2 | #27F2D2 | #27F248 | #5CB0FF
     */
    public function addCss(): void
    {
        echo '<style> 
                body { background: #000000; color: #FFFFFF; } 
                h1 { color: #5CB0FF; }
                h2 { color: #27F28D; margin-top: 40px; }
              </style>';
    }

    public function addHeadHtml(): void
    {
        echo '<title>Design patterns</title>';
    }
}

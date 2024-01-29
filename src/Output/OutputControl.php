<?php

declare(strict_types=1);

namespace Output;

class OutputControl
{
    private StrategyPatternControl $strategyPattern;

    public function __construct()
    {
        $this->strategyPattern = new StrategyPatternControl();
    }

    public function executeHelloWorld(): void
    {
        echo '<h1>Hello world</h1>';
    }

    public function executeStrategy(): void
    {
        $this->strategyPattern->execute();
    }
}

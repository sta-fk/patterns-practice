<?php

declare(strict_types=1);

namespace Output;

use Singleton\Logger;

class SingletonPatternControl implements PatternControlInterface
{
    public function execute(): void
    {
        echo '<h2>Design pattern Singleton</h2>';

        Logger::info('New message');
        Logger::error('New message');

        echo '<p>' . Logger::getLogs() . '</p>';
    }
}

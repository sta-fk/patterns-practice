<?php

declare(strict_types=1);

namespace Singleton;

final class Logger
{
    private const DIR = '/var/www/logs';

    private static ?self $logger = null;
    private string $logFilePath;

    private function __construct() {}

    public static function info(string $message): void
    {
        self::getLogger()->write('INFO', $message);
    }

    public static function error(string $message): void
    {
        self::getLogger()->write('ERROR', $message);
    }

    public static function getLogs(): string
    {
        $file = fopen(self::getLogger()->logFilePath, 'r');
        $fileForView = '';
        while (!feof($file)) {
            $fileForView .= fgets($file) . '<br/>';
        }
        fclose($file);

        return $fileForView;
    }

    private static function getLogger(): self
    {
        if (is_null(self::$logger)) {
            self::$logger = new self();
            self::$logger->setFilePath();
        }

        return self::$logger;
    }

    private function setFilePath(): void
    {
        $this->logFilePath = self::DIR . DIRECTORY_SEPARATOR . self::setFileName();
    }

    private static function setFileName(): string
    {
        $date = new \DateTimeImmutable();

        return 'dev_' . $date->format('Y-m-d') . '.log';
    }

    private function write(string $type, string $message): void
    {
        $date = new \DateTimeImmutable();
        $content = sprintf('[%s] %s: %s%s', $date->format('Y-m-d H:i:s'), $type, $message, PHP_EOL);

        file_put_contents($this->logFilePath, $content, FILE_APPEND | LOCK_EX);
    }
}

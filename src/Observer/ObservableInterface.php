<?php

declare(strict_types=1);

namespace Observer;

interface ObservableInterface
{
    public function registerObserver(ObserverInterface $observer): void;
    public function removeObserver(ObserverInterface $observer): void;
    public function notifyObservers(): void;
}

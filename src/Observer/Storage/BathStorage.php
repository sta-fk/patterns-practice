<?php

declare(strict_types=1);

namespace Observer\Storage;

use Observer\ObservableInterface;
use Observer\ObserverInterface;

class BathStorage implements ObservableInterface
{
    private array $observers;

    public function __construct(
        private int $bath,
        private int $shower,
    ) {}

    public function registerObserver(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $index => $object) {
            if ($object === $observer) {
                unset($this->observers[$index]);
            }
        }
    }

    public function notifyObservers(): void
    {
        /** @var ObserverInterface $observer */
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function getBath(): int
    {
        return $this->bath;
    }

    public function buyBath(int $bath): void
    {
        $this->bath -= $bath;
        $this->notifyObservers();
    }

    public function getShower(): int
    {
        return $this->shower;
    }

    public function buyShower(int $shower): void
    {
        $this->shower -= $shower;
        $this->notifyObservers();
    }
}

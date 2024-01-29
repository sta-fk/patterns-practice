<?php

declare(strict_types=1);

namespace Observer\Storage;

use Observer\ObservableInterface;
use Observer\ObserverInterface;

class FurnitureStorage implements ObservableInterface
{
    private array $observers;

    public function __construct(
        private int $bed,
        private int $sofa,
        private int $table,
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

    public function getBed(): int
    {
        return $this->bed;
    }

    public function buyBed(int $bed): void
    {
        $this->bed -= $bed;
        $this->notifyObservers();
    }

    public function getSofa(): int
    {
        return $this->sofa;
    }

    public function buySofa(int $sofa): void
    {
        $this->sofa -= $sofa;
        $this->notifyObservers();
    }

    public function getTable(): int
    {
        return $this->table;
    }

    public function buyTable(int $table): void
    {
        $this->table -= $table;
        $this->notifyObservers();
    }
}

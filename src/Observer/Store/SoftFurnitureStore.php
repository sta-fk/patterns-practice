<?php

declare(strict_types=1);

namespace Observer\Store;

use Observer\DisplayInterface;
use Observer\ObservableInterface;
use Observer\ObserverInterface;
use Observer\Storage\FurnitureStorage;

class SoftFurnitureStore implements ObserverInterface, DisplayInterface
{
    private readonly ObservableInterface $observable;
    private int $bed;
    private int $sofa;

    public function __construct(ObservableInterface $observable)
    {
        $this->observable = $observable;
        $observable->registerObserver($this);
    }

    public function update(): void
    {
        if ($this->observable instanceof FurnitureStorage) {
            $this->bed = $this->observable->getBed();
            $this->sofa = $this->observable->getSofa();
        }

        $this->display();
    }

    public function display(): void
    {
        echo 'In Soft furniture store: ' . $this->bed . ' beds and ' . $this->sofa . ' sofa<br/>';
    }
}

<?php

declare(strict_types=1);

namespace Observer\Store;

use Observer\DisplayInterface;
use Observer\ObservableInterface;
use Observer\ObserverInterface;
use Observer\Storage\FurnitureStorage;

class TableStore implements ObserverInterface, DisplayInterface
{
    private readonly ObservableInterface $observable;
    private int $table;

    public function __construct(ObservableInterface $observable)
    {
        $this->observable = $observable;
        $observable->registerObserver($this);
    }

    public function update(): void
    {
        if ($this->observable instanceof FurnitureStorage) {
            $this->table = $this->observable->getTable();
        }

        $this->display();
    }

    public function display(): void
    {
        echo 'In Table store: ' . $this->table . ' tables<br/>';
    }
}

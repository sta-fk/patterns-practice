<?php

declare(strict_types=1);

namespace Observer\Store;

use Observer\DisplayInterface;
use Observer\ObservableInterface;
use Observer\ObserverInterface;
use Observer\Storage\BathStorage;

class BathStore implements ObserverInterface, DisplayInterface
{
    private readonly ObservableInterface $observable;
    private int $bath;
    private int $shower;

    public function __construct(ObservableInterface $observable)
    {
        $this->observable = $observable;
        $observable->registerObserver($this);
    }

    public function update(): void
    {
        if ($this->observable instanceof BathStorage) {
            $this->bath = $this->observable->getBath();
            $this->shower = $this->observable->getShower();
        }

        $this->display();
    }

    public function display(): void
    {
        echo 'In Bath store: ' . $this->bath . ' bath and ' . $this->shower . ' showers <br/>';
    }
}

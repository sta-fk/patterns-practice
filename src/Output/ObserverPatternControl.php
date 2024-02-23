<?php

declare(strict_types=1);

namespace Output;

use Observer\Storage\BathStorage;
use Observer\Storage\FurnitureStorage;
use Observer\Store\BathStore;
use Observer\Store\SoftFurnitureStore;
use Observer\Store\TableStore;

class ObserverPatternControl implements PatternControlInterface
{
    private FurnitureStorage $furnitureStorage;
    private BathStorage $bathStorage;

    private TableStore $tableStore;
    private BathStore $bathStore;
    private SoftFurnitureStore $softFurnitureStore;

    public function execute(): void
    {
        echo '<h2>Design pattern Observer</h2>';

        $this->initializeStorages(10);
        $this->initializeStores();

        echo 'On start: 10 baths, 10 showers, 10 beds, 10 sofa, 10 tables';
        echo '<br/>';

        $this->displayChanges('-3 bath');
        $this->bathStorage->buyBath(3);

        $this->displayChanges('-8 tables');
        $this->furnitureStorage->buyTable(8);

        echo '<br/>';
        echo '<i>Bath store unfollow</i>';
        echo '<br/>';
        $this->bathStorage->removeObserver($this->bathStore);

        $this->displayChanges('-2 bath');
        $this->bathStorage->buyBath(2);

        echo 'In Bath storage: ' . $this->bathStorage->getBath() . ' baths';
        echo '<br/><br/>';

        echo '<i>Having a new bath store</i>';
        echo '<br/>';
        new BathStore($this->bathStorage);

        $this->displayChanges('-2 bath');
        $this->bathStorage->buyBath(2);
    }

    private function initializeStorages(int $count): void
    {
        $this->furnitureStorage = new FurnitureStorage($count, $count, $count);
        $this->bathStorage = new BathStorage($count, $count);
    }

    private function initializeStores(): void
    {
        $this->bathStore = new BathStore($this->bathStorage); // to delete later
        $this->tableStore = new TableStore($this->furnitureStorage);
        $this->softFurnitureStore = new SoftFurnitureStore($this->furnitureStorage);
    }

    private function displayChanges(string $message): void
    {
        echo '<b>' . $message . '</b>';
        echo '<br/>';
    }
}

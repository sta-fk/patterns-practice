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
    public function execute(): void
    {
        echo '<h2>Design pattern Observer</h2>';

        $furnitureStorage = new FurnitureStorage(10, 10, 10);
        $bathStorage = new BathStorage(10, 10);
        $bathStore = new BathStore($bathStorage);
        new TableStore($furnitureStorage);
        new SoftFurnitureStore($furnitureStorage);

        echo 'On start: 10 baths, 10 showers, 10 beds, 10 sofa, 10 tables';

        echo '<br/>';
        echo '<b>-3 bath</b>';
        echo '<br/>';
        $bathStorage->buyBath(3);

        echo '<b>-8 tables</b>';
        echo '<br/>';
        $furnitureStorage->buyTable(8);

        echo '<br/>';
        echo '<i>Bath store unfollow</i>';
        echo '<br/>';
        $bathStorage->removeObserver($bathStore);

        echo '<b>-2 bath</b>';
        echo '<br/>';
        $bathStorage->buyBath(2);
        echo 'In Bath storage: ' . $bathStorage->getBath() . ' baths';
        echo '<br/><br/>';

        echo '<i>Having a new bath store</i>';
        echo '<br/>';
        new BathStore($bathStorage);
        echo '<b>-2 bath</b>';
        echo '<br/>';
        $bathStorage->buyBath(2);
    }
}

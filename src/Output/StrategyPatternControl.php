<?php

declare(strict_types=1);

namespace Output;

use Strategy\AbstractApplication;
use Strategy\OnlineClientApplication;
use Strategy\ModeOfTransport\BicycleMode;
use Strategy\ModeOfTransport\BusMode;
use Strategy\ModeOfTransport\TaxiMode;

class StrategyPatternControl
{
    private const CLIENT = 'Rick';
    private const ARRIVAL_POINT = '219 India St, Brooklyn, NY 11222';
    private const DESTINATION = '20 W 34th St., New York, NY 10001';
    private const MILEAGE = 5.2;

    public function execute(): void
    {
        echo '<h2>Design pattern Strategy</h2>';
        echo sprintf(
            '<p>I\'m %s. We need to know the price of how to get from <i>%s</i> to <i>%s</i> by taxi, bicycle and bus</p>',
            self::CLIENT,
            self::ARRIVAL_POINT,
            self::DESTINATION,
        );

        $onlineClientApplication = $this->createOnlineApplication();

        echo 'Hello, ' . $onlineClientApplication->getClientName();
        echo '<br/>';

        $this->aboutModeOfTransport($onlineClientApplication);
        $onlineClientApplication->setModeOfTransport(new BicycleMode(self::MILEAGE));
        $this->aboutModeOfTransport($onlineClientApplication);
        $onlineClientApplication->setModeOfTransport(new BusMode());
        $this->aboutModeOfTransport($onlineClientApplication);
    }

    private function createOnlineApplication(): OnlineClientApplication
    {
        return new OnlineClientApplication(
            self::CLIENT,
            self::ARRIVAL_POINT,
            self::DESTINATION,
            self::MILEAGE,
            new TaxiMode(self::MILEAGE),
        );
    }

    private function aboutModeOfTransport(AbstractApplication $abstractApplication): void
    {
        echo $abstractApplication->getTransportName() . ': ' .$abstractApplication->getTransportCost();
        echo '<br/>';
        echo 'You will be there in ' . $abstractApplication->getDuration();
        echo '<br/>';
    }
}

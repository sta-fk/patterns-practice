<?php

declare(strict_types=1);

namespace Output;

use Decorator\SuperHero\GreenSuperHero;
use Decorator\SuperHero\RedSuperHero;
use Decorator\SuperHeroInterface;
use Decorator\Superpower\SuperAgility;
use Decorator\Superpower\SuperIntelligence;
use Decorator\Superpower\SuperPower;

class DecoratorPatternControl implements PatternControlInterface
{
    public function execute(): void
    {
        echo '<h2>Design pattern Decorator</h2>';

        $redHero = new SuperPower(new SuperAgility(new RedSuperHero()));
        $greenHero = new SuperAgility(new SuperIntelligence(new GreenSuperHero()));

        $this->printInfo($greenHero);
        $this->printInfo($redHero);
        $this->fight($greenHero, $redHero);
        echo '<br/>';
    }


    private function fight(SuperHeroInterface $first, SuperHeroInterface $second): void
    {
        if ($first->getChanceOfSurvival() > $second->getChanceOfSurvival()) {
            $this->printAlive($first);
        } elseif ($second->getChanceOfSurvival() > $first->getChanceOfSurvival()) {
            $this->printAlive($first);
        } else {
            echo 'Chances of survival are equal';
            echo '<br/>';
        }
    }

    private function printInfo(SuperHeroInterface $hero): void
    {
        echo sprintf('Superhero %s has a %s chance of survival', $hero->getDescription(), $hero->getChanceOfSurvival());
        echo '<br/>';
    }

    private function printAlive(SuperHeroInterface $hero): void
    {
        echo sprintf('Superhero %s will survive', $hero->getDescription());
        echo '<br/>';
    }
}

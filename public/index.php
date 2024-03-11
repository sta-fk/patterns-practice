<?php

use Output\BaseHtmlControl;
use Output\FactoryPatternControl\AbstractFactoryPatternControl;
use Output\FactoryPatternControl\FactoryMethodPatternControl;
use Output\FactoryPatternControl\SimpleFactoryPatternControl;
use Output\SingletonPatternControl;
use Output\StrategyPatternControl;
use Output\ObserverPatternControl;
use Output\DecoratorPatternControl;

spl_autoload_register(function ($className)
{
    $root = dirname(__DIR__);
    $slash = DIRECTORY_SEPARATOR;
    $fileName = sprintf("%s%ssrc%s%s.php", $root, $slash, $slash, str_replace("\\", "/", $className));
    require $fileName;
});

$baseHtmlOutput = new BaseHtmlControl();
$baseHtmlOutput->addHeadHtml();
$baseHtmlOutput->addCss();
$baseHtmlOutput->execute();

$strategy = new StrategyPatternControl();
$observer = new ObserverPatternControl();
$decorator = new DecoratorPatternControl();
$simpleFactory = new SimpleFactoryPatternControl();
$factoryMethod = new FactoryMethodPatternControl();
$abstractFactory = new AbstractFactoryPatternControl();
$singleton = new SingletonPatternControl();

$strategy->execute();
$observer->execute();
$decorator->execute();
$simpleFactory->execute();
$factoryMethod->execute();
$abstractFactory->execute();
$singleton->execute();

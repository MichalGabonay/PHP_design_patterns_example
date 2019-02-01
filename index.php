<?php

namespace designPatterns;

require_once "Singleton/Singleton.php";
require_once "Strategy/StrategyContext.php";
require_once "Decorator/HamSandwich.php";
require_once "Decorator/DoubleCheese.php";
require_once "Decorator/ExtraOnion.php";
require_once "Prototype/SkodaCarPrototype.php";

use designPatterns\Decorator\DoubleCheese;
use designPatterns\Decorator\ExtraOnion;
use designPatterns\Decorator\HamSandwich;
use designPatterns\Singleton\Singleton;
use designPatterns\Strategy\StrategyContext;
use designPatterns\Prototype\SkodaCarPrototype;

// SINGLETON
$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();
if ($singleton === $singleton2)
    echo "instances are identical <br><br>";


// STRATEGY
$price = 1000;
$percentStrategy = new StrategyContext('percent', 20);
$absoluteStrategy = new StrategyContext('absolute', 500);

echo "Percentage discount of 20% from " . $price . " is " . $percentStrategy->getPriceAfterDiscount($price) . " <br>";
echo "Absolute discount of 500 from " . $price . " is " . $absoluteStrategy->getPriceAfterDiscount($price) . " <br><br>";


// DECORATOR
$sandwich = new HamSandwich();
$sandwich = new DoubleCheese($sandwich);
$sandwich = new ExtraOnion($sandwich);

echo $sandwich->getDescription() . " for price " . $sandwich->getPrice() . "CZK. <br><br>";

// PROTOTYPE
$skodaPrototype = new SkodaCarPrototype();

$skoda_oktavia = clone $skodaPrototype;
$skoda_oktavia->setName("Oktavia");

$skoda_fabia = clone $skodaPrototype;
$skoda_fabia->setName("Fabia");

echo "Manufacturer: " . $skoda_oktavia->getManufacturer() . ", Name: " . $skoda_oktavia->getName() . "<br>";
echo "Manufacturer: " . $skoda_fabia->getManufacturer() . ", Name: " . $skoda_fabia->getName() . "<br><br>";


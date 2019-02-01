<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1. 2. 2019
 * Time: 11:13
 */

namespace designPatterns\Decorator;

require_once "SandwichDecorator.php";

class DoubleCheese extends SandwichDecorator {

    public function getPrice()
    {
        return $this->sandwich->getPrice() + 30;
    }

    public function getDescription()
    {
        return $this->sandwich->getDescription() . " with double cheese";
    }
}
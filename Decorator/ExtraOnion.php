<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1. 2. 2019
 * Time: 11:15
 */

namespace designPatterns\Decorator;

require_once "SandwichDecorator.php";

class ExtraOnion extends SandwichDecorator {

    public function getPrice()
    {
        return $this->sandwich->getPrice() + 20;
    }

    public function getDescription()
    {
        return $this->sandwich->getDescription() . " with extra onion";
    }
}
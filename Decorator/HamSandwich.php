<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1. 2. 2019
 * Time: 11:04
 */
namespace designPatterns\Decorator;

require_once "Sandwich.php";

class HamSandwich implements Sandwich {

    /**
     * @return int
     */
    public function getPrice()
    {
        return 50;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return "Ham sandwich";
    }
}
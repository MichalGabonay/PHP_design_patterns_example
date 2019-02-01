<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1. 2. 2019
 * Time: 11:06
 */
namespace designPatterns\Decorator;

abstract class SandwichDecorator implements Sandwich {

    protected $sandwich;

    public function __construct(Sandwich $sandwich)
    {
        $this->sandwich = $sandwich;
    }
}

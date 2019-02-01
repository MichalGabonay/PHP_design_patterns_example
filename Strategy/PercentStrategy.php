<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 9:44
 */

namespace designPatterns\Strategy;

require_once "SalePricingStrategy.php";

class PercentStrategy implements SalePricingStrategy {

    private $percentage;

    public function __construct($percentage)
    {
        // MAX 90% discount
        if ($percentage > 90) {
            $this->percentage = 90;
        } else {
            $this->percentage = $percentage;
        }
    }

    public function getTotal($price)
    {
        return $price - $price * ($this->percentage/100);
    }
}
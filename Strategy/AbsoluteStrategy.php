<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 9:44
 */

namespace designPatterns\Strategy;

require_once "SalePricingStrategy.php";

class AbsoluteStrategy implements SalePricingStrategy {

    private $discount;

    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function getTotal($price)
    {
        // max 90% discount
        if ($this->discount > ($price * 0.9)) {
            return $price*0.9;
        } else {
            return $price - $this->discount;
        }
    }
}
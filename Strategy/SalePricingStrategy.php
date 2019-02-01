<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 9:34
*/

namespace designPatterns\Strategy;

interface SalePricingStrategy {
    public function getTotal($price);
}


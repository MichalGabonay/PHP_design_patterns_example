<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 10:03
 */

namespace designPatterns\Strategy;

require_once "PercentStrategy.php";
require_once "AbsoluteStrategy.php";

class StrategyContext {

    private $strategy = NULL;

    /**
     * StrategyContext constructor.
     * @param $strategy_type
     * @param $amount
     */
    public function __construct($strategy_type, $amount)
    {
        if ($strategy_type == 'percent') {
            $this->strategy = new PercentStrategy($amount);
        } elseif ($strategy_type == 'absolute') {
            $this->strategy = new AbsoluteStrategy($amount);
        }
    }

    /**
     * @param $price
     * @return mixed
     */
    public function getPriceAfterDiscount($price)
    {
        if ($this->strategy !== NULL) {
            return $this->strategy->getTotal($price);
        } else {
            return $price;
        }
    }
}
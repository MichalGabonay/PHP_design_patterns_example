<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 12:39
 */

namespace designPatterns\Prototype;

require_once "CarPrototype.php";


class AudiCarPrototype extends CarPrototype {

    protected $manufacturer = "Audi";

    function __clone()
    {
    }
}
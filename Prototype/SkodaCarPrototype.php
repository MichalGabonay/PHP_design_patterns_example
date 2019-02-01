<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1. 2. 2019
 * Time: 12:40
 */

namespace designPatterns\Prototype;

require_once "CarPrototype.php";

class SkodaCarPrototype extends CarPrototype {

    protected $manufacturer = "Škoda";

    function __clone()
    {
    }
}
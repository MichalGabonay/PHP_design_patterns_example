<?php

namespace designPatterns\Singleton;

/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 9:14
 */

final class Singleton {

    private static $instance = NULL;

    private function __construct()
    {
    }

    public static function getInstance() {
        if (self::$instance === NULL){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}
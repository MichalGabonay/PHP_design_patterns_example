<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 12:53
 */
namespace designPatterns\Observer;

require_once "Observer.php";

abstract class Subject {
    abstract function attach(Observer $observer_in);
    abstract function detach(Observer $observer_in);
    abstract function notify();
}
<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 12:58
 */
namespace designPatterns\Observer;

require_once "Observer.php";
require_once "Subject.php";

class ConcreteObserver extends Observer {
    public function __construct() {
    }
    public function update(Subject $subject) {
        echo "Subject was updated! New Property 1: " . $subject->getProperty1() ."<br>";
    }
}
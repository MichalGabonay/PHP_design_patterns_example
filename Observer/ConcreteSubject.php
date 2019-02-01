<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 12:57
 */
namespace designPatterns\Observer;

require_once "Observer.php";
require_once "Subject.php";

class ConcreteSubject extends Subject {
    private $property1 = NULL;
    private $observers = array();
    function __construct() {
    }
    function attach(Observer $observer_in) {
        $this->observers[] = $observer_in;
    }
    function detach(Observer $observer_in) {
        foreach($this->observers as $okey => $oval) {
            if ($oval == $observer_in) {
                unset($this->observers[$okey]);
            }
        }
    }
    function notify() {
        foreach($this->observers as $obs) {
            $obs->update($this);
        }
    }
    function updateFavorites($newProperty) {
        $this->property1 = $newProperty;
        $this->notify();
    }
    function getFavorites() {
        return $this->property1;
    }
}
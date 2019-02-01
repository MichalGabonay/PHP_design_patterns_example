<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 1. 2. 2019
 * Time: 12:50
 */

namespace designPatterns\Observer;

require_once "Subject.php";

abstract class Observer {
    abstract function update(Subject $subject_in);
}
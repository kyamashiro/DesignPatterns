<?php
ini_set('display_errors', "On");
require '../../../vendor/autoload.php';
$myClass = new \Strategy\MyClass(new \Strategy\MyStrategyA());
$myClass->getOpinion(100);
$myClass->getOpinion(40);
$myClass->changeStrategy(new \Strategy\MyStrategyB());
$myClass->getOpinion(100);
$myClass->getOpinion(40);
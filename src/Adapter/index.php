<?php
ini_set('display_errors', "On");
require '../../vendor/autoload.php';
$adapter = new Adapter\Adapter("test");
$adapter->printWeak();
$adapter->printStrong();
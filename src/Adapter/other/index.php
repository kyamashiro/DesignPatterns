<?php
ini_set('display_errors', "On");
require '../../../vendor/autoload.php';
$viewer = new App\MyNameViewer();
$viewer->viewName(new App\MyPersonA("John"));
<?php
ini_set('display_errors', "On");
require '../../../vendor/autoload.php';
$adapter = new Other\Adapter(new \Other\MyPersonA("Ken", "Thompson"));
$viewer = new Other\MyNameViewer();
$viewer->viewName($adapter);
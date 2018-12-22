<?php
ini_set('display_errors', "On");
require '../../../vendor/autoload.php';
$adapter = new Adapter\Other\Adapter(new Adapter\Other\MyPersonA("Ken", "Thompson"));
$viewer = new Adapter\Other\MyNameViewer();
$viewer->viewName($adapter);
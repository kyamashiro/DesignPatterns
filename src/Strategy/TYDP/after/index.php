<?php
ini_set('display_errors', "On");
require '../../../../vendor/autoload.php';
$client = new \Strategy\TYDP\After\DialectSpeaker(\Strategy\TYDP\After\DialectSpeaker::KYOTO);
$client->sayWelcome();
$client->sayThanks();
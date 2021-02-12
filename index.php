<?php 

ini_set("display_errors", "1");
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/App/config.php';

use \App\Core\Core;

$core = new Core();
$core -> run();
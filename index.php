<?php 

ini_set("display_errors", "1");
error_reporting(E_ALL);

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/config.php';

use \App\core\Core;

$core = new Core();
$core -> run();
<?php

ini_set("display_errors", "1");
error_reporting(E_ALL);

require 'enviroment.php';


$config = array();


if(ENVIROMENT == 'development'){
    
    define('BASE_URL', 'http://localhost/php/mvcpratica/mvc9/');

    $config['db_name'] = 'products';
    $config['db_host'] = 'localhost';
    $config['db_user'] = 'root';
    $config['db_pass'] = '';

}else{

    //production

    define('BASE_URL', 'http://localhost/php/mvcpratica/mvc9/');

    $config['db_name'] = 'products';
    $config['db_host'] = 'production';
    $config['db_user'] = 'root';
    $config['db_pass'] = '';

}


global $pdo;

try {
    
    $pdo = new PDO('mysql:dbname='.$config['db_name'].';host='.$config['db_host'], $config['db_user'], $config['db_pass']);

} catch (PDOException $e) {
    
    echo 'Error: '.$e -> getMessage();
    exit;
}
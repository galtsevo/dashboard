<?php
//ini_set('display_errors', 1);
//error_reporting(E_ALL);


include_once 'lib/functions.php';
use core\Router;

spl_autoload_register('autoload');

session_start();
//debug($_SERVER['REQUEST_URI']);
$router = new Router;
$router->run();
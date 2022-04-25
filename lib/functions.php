<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function autoload($class){
    $path = str_replace('\\', '/', $class.'.php');
    if(file_exists($path)){
        require $path;
    }
}

function debug($param){
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
    exit();
}

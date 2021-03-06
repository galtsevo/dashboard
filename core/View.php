<?php

namespace core;

use core\Controller;
use core\Router;

class View
{
    public $path;
    public $route;
    public $layout = 'default';

    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
//        debug($this->path);
    }

    public function render($title, $vars = []){
        extract($vars);
        $path = 'views/'.$this->path.'.php';
//        var_dump($vars);

        if(file_exists($path)){
            ob_start();
            require $path;
            $content = ob_get_clean();

            require 'views/layouts/'.$this->layout.'.php';
        }else{
            echo 'Вид не найден';
        }
    }

    public function redirect($url){
        header('location'.$url);
        exit;
    }

    public static function errorCode($code){
        http_response_code($code);
        $path = 'views/errors/'.$code.'.php';
        if(file_exists($path))
            require $path;
//        exit;
    }

    public function message($status, $message) {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public function location($url) {
        exit(json_encode(['url' => $url]));
    }
}
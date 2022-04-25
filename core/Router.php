<?php

namespace core;

use core\View;

class Router
{
    protected $routes = [];
    protected $params = [];
    protected $local = 'http://dashboard.bsu-eis.ru/';

    public function __construct(){
        $arr = require 'config/routes.php';
        foreach ($arr as $key => $val){
            $this->add($key, $val);
        }

    }

    public function add($route, $params){
        $route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);
        $route = '#^'.$route.'$#';
//        debug($route);
        $this->routes[$route] = $params;
    }

    public function match(){
//        $url = trim($_SERVER['REQUEST_URI'], $this->local.'/');
        $url = trim($_SERVER['REQUEST_URI'], '/');
//        debug($url);
        foreach ($this->routes as $route => $params){
            if(preg_match($route, $url, $matches)){
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match)) {
                            $match = (int) $match;
                        }
                        $params[$key] = $match;
                    }
                }

                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    public function run(){
//        debug($this->match());
        if($this->match()){
//            echo '<p> Router Найден </p><br>';
            $path = '\controllers\\'.ucfirst($this->params['controller']).'Controller';
//            debug(__DIR__);
            if(class_exists($path)){

                $action = $this->params['action'].'Action';
//                var_dump($path);
//                var_dump($action);
                if(method_exists($path, $action)){
//                    debug($path);
//                    debug($action);
                    $controller = new $path($this->params);
                    $controller->$action();
                }else{
//                    debug($this);
                    View::errorCode(404);
                    echo '<p> Не найден экшен</p> <br>'.$action;
                }
//                echo '<p> Контроллер найден</p><br>';
            }else{
                View::errorCode(404);
                echo '<p> Контроллер не найден</p><br>';
            }

        }else{
            View::errorCode(404);
            echo '<p> Router не найден</p><br>';
        }
    }
}
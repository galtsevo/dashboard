<?php

namespace core;
use core\View;

abstract class Controller
{
    public $route;
    public $view;
    public $acl;

    public function __construct($route){
        $this->route = $route;
//        debug($this);
        if(!$this->checkAcl()){
            View::errorCode(403);
        }
//        debug($this->checkAcl());
        $this->view = new View($route);
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = 'models\\'.ucfirst($name);
//        debug($path);
        if(class_exists($path)){
            return new $path();
        }
    }

    public function checkAcl(){
        $path = 'acl/'.$this->route['controller'].'.php';
//        debug($this->route['controller']);
        if(file_exists($path)){

            $this->acl = require $path;
//            debug($this->isAcl('all'));
            if ($this->isAcl('all')){
                return true;
            }elseif (isset($_SESSION['authorize']['id']) and $this->isAcl('authorize')){
                return true;
            }elseif (!isset($_SESSION['authorize']['id']) and $this->isAcl('guest')){
                return true;
            }elseif (isset($_SESSION['admin']) and $this->isAcl('admin')){
                return true;
            }else{
                return false;
            }

        }
    }

    public function isAcl($key){
        return in_array($this->route['action'], $this->acl[$key]);
    }
}
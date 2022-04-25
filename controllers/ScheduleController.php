<?php

namespace controllers;

use core\Controller;
use lib\Db;

class ScheduleController extends Controller
{
//
    public function indexAction(){
        $result = $this->model->showLinks();
        $vars = [
            'items' => $result,
            'controller'=>$this->route['controller'],
        ];

        $this->view->render('Главная страница', $vars);
    }

    public function reenterAllRetakesAndComissionsAction(){
//        debug($this->route['action']);
        $result = $this->model->get();
        $vars = [
            'items' => $result,
            'controller'=>$this->route['controller'],
        ];

//        $this->view->render('Главная страница', $vars);
    }

}
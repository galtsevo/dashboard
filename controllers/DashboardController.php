<?php

namespace controllers;

use core\Controller;
use lib\Db;

class DashboardController extends Controller
{
    public function indexAction(){
//        $result = $this->model->getCatalogType();
//
//        $vars = [
//            'items' => $result,
//        ];
        $this->view->render('Главная страница');
    }

}
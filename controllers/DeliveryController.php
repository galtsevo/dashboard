<?php

namespace controllers;

use core\Controller;
use lib\Db;

class DeliveryController extends Controller
{
    public function indexAction(){
        $result = $this->model->getItems();

        $vars = [
            'news' => $result,
        ];
        $this->view->render('Страница доставки', $vars);
    }
}
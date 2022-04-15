<?php

namespace controllers;

use core\Controller;
use lib\Db;

class MainController extends Controller
{
    public function indexAction(){
        $result = $this->model->getCatalogType();

        $vars = [
            'items' => $result,
        ];
        $this->view->render('Главная страница', $vars);
    }

    public function contactsAction(){
        echo '<p>Страница контактов</p>';
        $this->view->render('Страница контактов');
    }

    public function catalogAction(){
        echo '<p>Страница каталога</p>';
    }
}
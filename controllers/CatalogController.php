<?php

namespace controllers;

use core\Controller;
use lib\Db;

class CatalogController extends Controller
{
    public function typeAction(){
//        debug(__DIR__);
        $result = $this->model->getTypeItems($this->route);

//        echo ini_get('include_path');
        $vars = [
            'ctype' => $result[0]['ctype'],
            'items' => $result,
        ];
        $this->view->render('Главная страница', $vars);
    }
}
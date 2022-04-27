<?php

namespace core;
use models\User;

abstract class UserController
{
    public $data;

    public function __construct($values)
    {
        $model = new User();
        $this->data = $model->getUserData($values);
    }
}
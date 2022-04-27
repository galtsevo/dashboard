<?php

namespace controllers;
use core\UserController;

class TeacherController extends UserController
{
    public function getFirstname()
    {
        return $this->data[0]['firstname'];
    }

    public function getLastname()
    {
        return $this->data[0]['lastname'];
    }

    public function getFullname()
    {
        $lastname = $firstname = '';

        if(isset($this->data[0]['lastname'])) $lastname = $this->data[0]['lastname'];
        if(isset($this->data[0]['firstname'])) $firstname = $this->data[0]['firstname'];

        $fullName = $lastname.' '.$firstname;
        return $fullName;
    }

    public function getEmail()
    {
        $email = '';
        if(isset($this->data[0]['email'])) $email = $this->data[0]['email'];

        return $email;
    }
}
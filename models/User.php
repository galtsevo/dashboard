<?php

namespace models;
use core\Model;

class User extends Model
{
    public function getUserData($values){
//        debug($values);
//        echo $values['id'].'+++++'.$values['teacherid'].'<br>';
        $userid = 0;
        if(isset($values['teacherid']))  $userid = $values['teacherid'];
        if(isset($values['userid']))     $userid = $values['userid'];
        if(isset($values['studentid']))  $userid = $values['studentid'];

        $result = $this->db->row("SELECT * FROM mdl_user where id=$userid");
        return $result;
    }
}

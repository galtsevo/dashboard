<?php

namespace lib;
use PDO;

class Db
{
    protected $db;

    public function __construct(){
        $config = require 'config/db.php';
        $this->db = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config['dbname'], $config['user'], $config['password']);
//        debug($this->db);
    }

    public function query($sql, $params = []){
        $statement = $this->db->prepare($sql);
        if(!empty($params)){
            foreach ($params as $key=>$value){
//                echo '<p>'.$key.'+++'.$value.'</p>';
                $statement->bindValue(':'.$key, $value);
            }
        }
//        exit();
        $statement->execute();
        return $statement;
    }

    public function row($sql, $params = []){
        $result = $this->query($sql, $params);
//        debug($result);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function column($sql, $params = []){
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }

    private function __clone() { //запрещаем клонирование объекта модификатором private
    }

    private function __wakeup() {//запрещаем клонирование объекта модификатором private
    }
}
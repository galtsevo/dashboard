<?php
namespace models;
use core\Model;

class Catalog extends Model
{

    public function getTypeItems($route){

        $max = 6;
        $params = [
//            'max' => $max,
            'idtype' => $route['id'],
        ];

        $result = $this->db->row("SELECT i.id, i.title, i.path, i.idtype, t.title as ctype FROM catalog_item i 
                                        left join catalog_type t ON t.id=i.idtype
                                        where idtype=:idtype ORDER BY i.id DESC LIMIT 6", $params);
        return $result;
    }

}
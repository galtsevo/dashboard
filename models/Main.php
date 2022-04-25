<?php

namespace models;
use core\Model;

class Main extends Model
{
    public function getItems(){
        $result = $this->db->row("SELECT id, title, path, idtype FROM catalog_item");
        return $result;

    }

    public function getCatalogType(){
        $result = $this->db->row("SELECT id, title, path FROM catalog_type");
        return $result;
    }

//$result = $this->db->row("SELECT i.id, i.title, i.path, i.idtype, t.title as ctype FROM catalog_item i
//                                        left join catalog_type t ON t.id=i.idtype
//                                        where idtype=:idtype ORDER BY i.id DESC LIMIT 6", $params);
}

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

}

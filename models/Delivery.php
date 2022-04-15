<?php
namespace models;
use core\Model;

class Delivery extends Model
{

    public function getItems(){
        $result = $this->db->row("SELECT id, title, path, idtype FROM catalog_item");
        return $result;

    }
}
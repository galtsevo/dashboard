<?php

namespace models;
use core\Model;

class Dashboard extends Model
{
    /*
     * Вывод меню
     */
    public function indexAction(){
        $result = $this->db->row("SELECT * FROM mdl_bsu_dashboard_menu");
        return $result;

    }

    /*
     * Обновить даты пересдач и комиссий в расписании ИнфоБелГУ: Учебный процесс
     */
//    public function reenterAllRetakesAndComissions(){
//        $result = $this->db->row("SELECT id, title, path, idtype FROM catalog_item");
//        return $result;
//    }

}

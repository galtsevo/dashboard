<?php

namespace models;
use core\Model;

class Schedule extends Model
{
    /*
     * Вывод меню
     */
    public function showLinks(){
        $result = $this->db->row("SELECT * FROM mdl_bsu_dashboard_menu");
        return $result;

    }



    public function getSchedule($params){

        $sqtr_sql = '';

        if(isset($params['disciplineid']))
            $sqtr_sql .= 'and s.disciplineid=:disciplineid ';

        if(isset($params['id']))
            $sqtr_sql .= 'and s.id=:id ';

        $result = $this->db->row("SELECT * FROM dean.mdl_bsu_schedule s
                                        where s.edworkindid in (:edworkindid) 
                                          and s.datestart>=:datestart 
                                          and s.deleted=:deleted
                                          and s.departmentcode not in(:departmentcode) 
                                          and s.pairid < :pairid 
                                          $sqtr_sql", $params);

        return $result;
    }

    public function getScheduleMask($params){
        $result = $this->db->row("SELECT * FROM dean.mdl_bsu_schedule_mask s
                                        where s.id=:id", $params);
        return $result[0];
    }
}

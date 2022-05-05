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
            $sqtr_sql .= ' and s.disciplineid=:disciplineid ';

        if(isset($params['id']))
            $sqtr_sql .= ' and s.id=:id ';

        if(isset($params['pairid']))
            $sqtr_sql .= ' and s.pairid < :pairid ';

        if(isset($params['limit']))
            $sqtr_sql .= ' and LIMIT :limit ';

        $result = $this->db->row("SELECT s.* FROM dean.mdl_bsu_schedule s
                                        inner join mdl_bsu_ref_groups mbrg on s.groupid = mbrg.id
                                        where 
                                             s.edworkindid in (:edworkindid) 
                                             and s.datestart>=:datestart 
                                             and s.deleted=:deleted 
                                             and s.departmentcode not in(:departmentcode) 
                                             and s.disciplineid<>0
                                             and s.usermodified<>0
                                             and mbrg.endyear>2022                                             
                                          -- and s.id=14089552
                                           $sqtr_sql 
                                          -- order by s.id desc
                                             LIMIT 1
                                          ", $params);
//debug($result);//$sqtr_sql

        return $result;
    }

    public function getGroup($params){
        $result = $this->db->row("SELECT * FROM dean.mdl_bsu_ref_groups
                                        where id=:id", $params);
        return $result[0];
    }

    public function getScheduleMask($params){
        $result = $this->db->row("SELECT * FROM dean.mdl_bsu_schedule_mask s
                                        where s.id=:id", $params);
        return $result[0];
    }
}

<?php

namespace controllers;

use core\Controller;
use models\User;

//use lib\Db;
//use controllers\TeacherController;

class ScheduleController extends Controller
{
//
    public function indexAction(){
        $result = $this->model->showLinks();
        $vars = [
            'items' => $result,
            'controller'=>$this->route['controller'],
        ];

        $this->view->render('Главная страница', $vars);
    }

    /*
     * Обновить выставленные пересдачи и комиссии (без одноразовых)
     */
    public function reenterAllRetakesAndComissionsAction(){
        $params = [
            'edworkindid' => '101,102',
            'datestart' => 1661994877,// с 1 сентября
            'deleted' => 0,
            'departmentcode'=>'10305, 19000, 19206, 19207, 19208',
            'pairid'=>5
            ,'id'=>13833571
        ];
        $pairs = $this->model->getSchedule($params);

        foreach ($pairs as $pair){

            $post = array();

            $post['replaceid'] = $pair['replaceid'];
            $post['inroom'] = $pair['inroom'];
            $post['textinroom'] = $pair['textinroom'];
            $post['hour_start'] = 15;//date('H', $pair['timestart']) ;
            $post['minute_start'] = 45;//date('i', $pair['timestart']) ;
            $post['hour_end'] = 17;//date('H', $pair['timeend']) ;
            $post['minute_end'] = 20;//date('i', $pair['timeend']) ;

            $teacher = new TeacherController($pair);
            $post['teacher'] = $teacher->getFullname().', '.$teacher->getEmail();

            $post['tw'] =  $pair['periodweek'];
            $post['day'] = date('d', $pair['datestart']) ;
            $post['month'] = date('m', $pair['datestart']) ;
            $post['year'] = date('Y', $pair['datestart']) ;
            $post['saveschedule'] = 'Сохранить';
            $post['pol'] = 2;
            $post['fid'] = $pair['departmentcode'];
            $post['gid'] = $pair['groupid'];
            $post['id'] = $pair['id'];
            $post['mid'] = 0;
            $post['yid'] = 22;
            $post['term'] = $pair['term'];
            $post['did1'] = 0;
            $post['view'] = 0;
            $post['par'] = 5;//$pair['pairid'];
            $post['tid'] = 0;
            $post['wid'] = $pair['weekday'];
            $post['this_practice'] = '';
            $post['eid'] = $pair['edworkindid'];
            $post['did'] = $pair['disciplineid'];
            $post['idr'] = $pair['roomid'];
            $post['sgid'] = 0;
            $post['sesskey'] = 'Q6aSeiHgNm';
            $post['no_seat'] = 0;
            $post['online'] = $pair['online'];
            $post['mook'] = $pair['mook'];
            $post['action'] = 'reload';
//            debug($post);
//var_dump($pair);
            $url = 'https://dekanat.bsu.edu.ru/blocks/bsu_schedule/edit/editpair.php';
            echo $aaa=curl($url, $post);
        }
    }

    /*
     * Обновить выставленные одноразовыми мероприятиями пересдачи и комиссии
     */
    public function reenterAllRetakesAndComissionsOneEventAction(){
        $params = [
            'edworkindid' => '101,102',
            'datestart' => 1661994877,// с 1 сентября
            'deleted' => 0,
            'departmentcode'=>'10305, 19000, 19206, 19207, 19208',
            'pairid'=>5,
            'disciplineid'=>0
        ];
        $pairs = $this->model->getSchedule($params);

        foreach ($pairs as $pair){
            $post = array();

            $params = ['id'=>$pair['schedulemaskid']];
            $scheduleMask = $this->model->getScheduleMask($params);

            $post['countpair'] = $scheduleMask['countpair'];

            $teacher = new TeacherController($pair);
            $post['teacher'] = $teacher->getFullname().', '.$teacher->getEmail();

            $post['discipline'] = $pair['disciplinename'];
            $post['hour_start'] = 15;//date('H', $pair['timestart']) ;
            $post['minute_start'] = 45;//date('i', $pair['timestart']) ;
            $post['hour_end'] = 17;//date('H', $pair['timeend']) ;
            $post['minute_end'] = 20;//date('i', $pair['timeend']) ;
            $post['day'] = date('d', $pair['datestart']) ;
            $post['month'] = date('m', $pair['datestart']) ;
            $post['year'] = date('Y', $pair['datestart']) ;
            $post['tw'] =  $pair['periodweek'];
            $post['saveschedule'] = 'Сохранить';
            $post['action'] = 'edit';
            $post['fid'] = $pair['departmentcode'];
            $post['wid'] = $pair['weekday'];
            $post['par'] = 5;//$pair['pairid'];
            $post['eid'] = $pair['edworkindid'];
            $post['mid'] = $pair['schedulemaskid'];
            $post['gid'] = $pair['groupid'];
            $post['ct'] = 2;
            $post['idr'] = $pair['roomid'];
            $post['online'] = $pair['online'];
            $post['sesskey'] = 'kX7UBCJ1EX';
            $post['ida'] = 0;
            $post['idb'] = 0;
            $post['tid'] = 0;
            $post['yid'] = 22;

            $url = 'https://dekanat.bsu.edu.ru/blocks/bsu_schedule/oneevents/edit.php';
            curl($url, $post);
        }
//        debug($result);
//        $vars = [
//            'items' => $result,
//            'controller'=>$this->route['controller'],
//        ];

//        $this->view->render('Главная страница', $vars);
    }

}
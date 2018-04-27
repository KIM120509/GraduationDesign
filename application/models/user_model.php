<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class User_model extends CI_Model{
//*****************************************************
//与表《 t_user 》有关的操作都在此路由内
//t_user：username   password    identity
//*****************************************************
    public function get_by_name_pwd($name, $pwd){
        //$this -> db -> query("select * from t_user where username='$name' and password='$pwd'");//有sql注入危险
        return $this -> db -> get_where('t_user', array(
            'username' => $name,
            'password' => $pwd
        )) -> row(); // result();
    }

    public function get_remind_by_name($name){
        return $this -> db -> get_where('t_remind', array(
            'username' => $name
        )) -> row(); // result();
//        $this->db->affected_rows()
    }

}
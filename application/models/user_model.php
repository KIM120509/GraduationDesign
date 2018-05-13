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

    public function get_remind_by_name($user_id){
//        return $this -> db -> get_where('t_remind', array(
//            'user_id' => $id
//        )) -> row(); // result();
//        $this->db->affected_rows()
        $sql="select * from t_remind where user_id=$user_id";
        $result = $this->db->query ($sql);
        $re = $result->result ();
        return $re;

    }

}
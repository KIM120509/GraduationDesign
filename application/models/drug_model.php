<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class drug_model extends CI_Model{
    public function get_by_name_pwd($name, $pwd){
        //$this -> db -> query("select * from t_user where username='$name' and password='$pwd'");//有sql注入危险
        return $this -> db -> get_where('t_user', array(
            'username' => $name,
            'password' => $pwd
        )) -> row(); // result();
    }

}
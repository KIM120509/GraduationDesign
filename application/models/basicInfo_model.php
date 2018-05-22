<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class basicInfo_model extends CI_Model{
    public function get_farm_by_name($user_id){
        $sql="select * from t_farm where user_id=$user_id";
        $result = $this->db->query ($sql);
        $re = $result->result ();
        return $re;
    }
    public function get_build_by_name($user_id){
        $sql="select * from t_build where user_id=$user_id";
        $result = $this->db->query ($sql);
        $re = $result->result ();
        return $re;
    }
    public function get_fence_by_name($user_id){
        $sql="select * from t_fence where user_id=$user_id";
        $result = $this->db->query ($sql);
        $re = $result->result ();
        return $re;
    }
    public function delete_build($build_id){
        $this->db->delete('t_build',array(
            'build_id'=>$build_id
        ));
        return $this->db->affected_rows();
    }
    public function delete_fence($fence_id){
        $this->db->delete('t_build',array(
            'fence_id'=>$fence_id
        ));
        return $this->db->affected_rows();
    }

    public function get_customer_by_name($user_id){
        $sql="select * from t_customer where user_id=$user_id";
        $result = $this->db->query ($sql);
        $re = $result->result ();
        return $re;
    }
    public function get_employee_by_name($user_id){
        $sql="select * from t_employee where user_id=$user_id";
        $result = $this->db->query ($sql);
        $re = $result->result ();
        return $re;
    }

}
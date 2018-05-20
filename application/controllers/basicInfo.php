<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basicInfo extends CI_Controller {
//*****************************************************
//基本信息模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('basicInfo_model');
        $this -> load -> model('user_model');
    }

	public function index(){
        $login_user = $this->session->userdata('login_user');
        $data['remind']  = $this -> user_model -> get_remind_by_name($login_user -> user_id);
        $data['farm'] = $this -> basicInfo_model ->get_farm_by_name($login_user -> user_id);
        $data['builds'] = $this -> basicInfo_model ->get_build_by_name($login_user -> user_id);
        $data['fences'] = $this -> basicInfo_model ->get_fence_by_name($login_user -> user_id);
        $this->load->view('basicInfo/farm',$data);
	}
    public function delete_build(){
        $build_id=$this->input->get('build_id');
        $row=$this->basicInfo_model->delete_build($build_id);
        if ($row>0){
            redirect('basicInfo/index');
        }else{
            echo 'fail';
        }
    }
    public function delete_fence(){
        $fence_id=$this->input->get('fence_id');
        $row=$this->basicInfo_model->delete_fence($fence_id);
        if ($row>0){
            redirect('basicInfo/index');
        }else{
            echo 'fail';
        }
    }
	public function juanshe(){
        $login_user = $this->session->userdata('login_user');
        $data['remind']  = $this -> user_model -> get_remind_by_name($login_user -> user_id);
    $this->load->view('basicInfo/juanshe',$data);
    }
    public function customer(){
        $login_user = $this->session->userdata('login_user');
        $data['remind']  = $this -> user_model -> get_remind_by_name($login_user -> user_id);
        $this->load->view('basicInfo/customer',$data);
    }
    public function employee(){
        $login_user = $this->session->userdata('login_user');
        $data['remind']  = $this -> user_model -> get_remind_by_name($login_user -> user_id);
        $this->load->view('basicInfo/employee',$data);
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
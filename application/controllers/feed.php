<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class feed extends CI_Controller {
//*****************************************************
//基本信息模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('feed_model');
    }
	public function index(){
        $this->load->view('login');
	}
    public function check_login(){
        //1. 接收数据
        $username = $this -> input -> post('username');
        $password = $this -> input -> post('password');

        //2. 验证
        //3. 数据库操作
        $this -> load -> model('user_model');//加载model文件
        $result = $this -> user_model -> get_by_name_pwd($username, $password);

        if($result){//查到结果
            $this -> session -> set_userdata('login_user', $result);
            redirect('welcome/home', array(
                'login_user' => $result
            ));
        }else{//未查到结果
            echo 'fail';
        }
    }

    public function home(){
        $this->load->view('home');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
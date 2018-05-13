<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
//*****************************************************
//包含登陆界面、登陆验证、以及首页
//*****************************************************

    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this -> load -> model('user_model');
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
        $result = $this -> user_model -> get_by_name_pwd($username, $password);

        if($result){//查到结果
            $this -> session -> set_userdata('login_user', $result);
            redirect('welcome/home');
        }else{//未查到结果
            echo 'fail';
        }
    }

    public function home(){
//        $this->load->view('home');
        //获取提醒信息
        $login_user = $this->session->userdata('login_user');
        $data['remind']  = $this -> user_model -> get_remind_by_name($login_user -> user_id);
//        $articles = $this->article_model->get_ariticles_by_user($loginedUser->user_id);
//        $this -> session -> set_userdata('remind', $remind);

        $this->load->view('home',$data);

    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
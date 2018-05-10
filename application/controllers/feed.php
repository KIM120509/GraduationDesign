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
        $this->load->view('feed/feedInfo');
    }
    public function inventory(){
        $this->load->view('feed/inventory');
    }
    public function storage(){
        $this->load->view('feed/storage');
    }
    public function out(){
        $this->load->view('feed/out');
    }
    public function refund(){
        $this->load->view('feed/refund');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
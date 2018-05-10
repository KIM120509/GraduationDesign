<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class daily extends CI_Controller {
//*****************************************************
//基本信息模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('daily_model');
    }
    public function index(){
        $this->load->view('daily/inventory');
    }
    public function purchase(){
        $this->load->view('daily/purchase');
    }
    public function uses(){
        $this->load->view('daily/use');
    }
    public function scrap(){
        $this->load->view('daily/scrap');
    }
    public function articlesInfo(){
        $this->load->view('daily/articlesInfo');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class drug extends CI_Controller {
//*****************************************************
//基本信息模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('drug_model');
    }
    public function index(){
        $this->load->view('drug/inventory');
    }
    public function out(){
        $this->load->view('drug/out');
    }
    public function refund(){
        $this->load->view('drug/refund');
    }
    public function treatment(){
        $this->load->view('drug/treatment');
    }
    public function disinfection(){
        $this->load->view('drug/disinfection');
    }
    public function storage(){
        $this->load->view('drug/storage');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
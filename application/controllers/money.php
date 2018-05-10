<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class money extends CI_Controller {
//*****************************************************
//基本信息模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('money_model');
    }
	public function index(){
        $this->load->view('money/income');
	}

    public function expenses(){
        $this->load->view('money/expenses');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
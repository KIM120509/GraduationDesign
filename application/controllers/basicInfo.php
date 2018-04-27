<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class basicInfo extends CI_Controller {
//*****************************************************
//基本信息模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('basicInfo_model');
    }

	public function index(){
        $this->load->view('basicInfo/farm');
	}
	public function juanshe(){
    $this->load->view('basicInfo/juanshe');
    }
    public function customer(){
        $this->load->view('basicInfo/customer');
    }
    public function employee(){
        $this->load->view('basicInfo/employee');
    }



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
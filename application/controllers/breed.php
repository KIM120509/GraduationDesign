<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class breed extends CI_Controller {
//*****************************************************
//种猪模块的控制层
//*****************************************************
    function __construct(){//加载本控制层所需的所有model文件
        parent::__construct();
        $this->load->model('breed_model');
    }
	public function index(){
        $this->load->view('breed/date');
	}
    public function info(){
        $this->load->view('breed/info');
    }
    public function boar(){
        $this->load->view('breed/boar');
    }
    public function sow(){
        $this->load->view('breed/sow');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
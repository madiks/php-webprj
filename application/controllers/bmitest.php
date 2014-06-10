<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bmitest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	function index(){
		
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;

		
		$this->load->view('bmitest_view',$data);	
	}
	
	
}


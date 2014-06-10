<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	function index(){
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		//print_r($couls);
		$descmodel  = $this->index_model->read("type = 2 AND status = 1",null,null,null);
		$data['couls'] = $couls;
		$data['descmodel'] = $descmodel;
		$this->load->view('index_view',$data);	
	}
	
}


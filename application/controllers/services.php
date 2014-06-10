<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->helper('url');
		$this->load->model('about_model');
		$this->load->library('session');
	}

	function index(){
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;

		$where2 = 'keyword = "services" AND type = 2 AND status = 1';
		$info = $this->about_model->readorder($where2,null,null);
		$data['info'] = $info[0];
		$this->load->view('member_view',$data);	
	}

	
	
}


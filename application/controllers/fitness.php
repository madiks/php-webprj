<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fitness extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->helper('url');
		$this->load->model('fitness_model');
		$this->load->library('session');
	}

	function index($pageNo = NUll){
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;

		$Fits = $this->fitness_model->getByPage('status = 1',$pageNo,5,'updatetime desc','id,title,updatetime');
		//print_r($Fits);
		$data['fits'] = $Fits;
		$this->load->view('fitness_view',$data);	
	}


	function detail($id = NULL){
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$aidlist = $this->fitness_model->read("status = 1",null,null,'id');
		//print_r($aidlist);
		if(!$this->isexits($aidlist,$id)){
			show_404();
		}

		$where2 = "status = 1 AND id = ".$id;
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;

		$act = $this->fitness_model->read($where2,null,null,'id,title,updatetime,content');
		//print_r($act);
		$data['fitness'] = $act[0];
		$this->load->view('fitness_info_view',$data);
	}

	private function isexits($data,$value){
		$res = 0;
		//print_r($data);
		foreach ($data as $key => $val) {
			if($val->id==$value){
				$res = 1;
			}
		}
		return $res;
	}

	
	
}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

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

		$aboutitems = $this->about_model->readorder("status = 1 AND type = 1","id,keyword,itemname","id");
		//print_r($aboutitems);
		$where2 = 'keyword = "'.$aboutitems[0]->keyword.'"';
		$info = $this->about_model->readorder($where2,null,null);
		//print_r($info);
		$data['keyword'] = $aboutitems[0]->keyword;
		$data['aboutitems'] = $aboutitems;
		$data['info'] = $info[0];
		$this->load->view('about_view',$data);	
	}

	function details($keyword = null){
		if($keyword == ""){
			show_404();
		}
		//echo $keyword;
		$aboutitems = $this->about_model->readorder("status = 1 AND type = 1","id,keyword,itemname","id");
		if(!$this->isexits($aboutitems,$keyword)){
			show_404();
		}
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;
		$data['keyword'] = $keyword;
		$where2 = 'keyword = "'.$keyword.'"';
		$info = $this->about_model->readorder($where2,null,null);
		//print_r($info);
		$data['aboutitems'] = $aboutitems;
		$data['info'] = $info[0];
		$this->load->view('about_view',$data);
	}

	private function isexits($data,$value){
		$res = 0;
		//print_r($data);
		foreach ($data as $key => $val) {
			if($val->keyword==$value){
				$res = 1;
			}
		}
		return $res;
	}
	
}


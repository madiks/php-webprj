<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkshe extends CI_Controller {

	var $uid;
	var $uname;
	var $sname;
	var $status;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->uname = $this->session->userdata('uname');
		if(!$this->uname){
			redirect('/login', 'refresh');	
		}else{
			$this->uid = $this->session->userdata('uid');
			$this->sname = $this->session->userdata('sname');
			$this->status = $this->session->userdata('status');
		}
	}

	function index($pageNo = NULL){
		$this->load->model('bookrecord_model');
		if($this->status == 1){

			if($pageNo == ""){
				$pageNo = 1;
			}else if(!is_numeric($pageNo)){
				show_404();
			}
			$where = "uid = ".$this->uid;
			$cses = $this->bookrecord_model->getByPage($where,$pageNo,5,"createtime desc",NULL);
			//print_r($cses);
			$this->load->view('check_cshe_view',$cses);
		}else{
			$this->load->view('no_permison_view');
		}
	}
	
	
}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookingcourse extends CI_Controller {

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
		$this->load->model('course_she_model');
		if($this->status == 1){
			if($pageNo == ""){
				$pageNo = 1;
			}else if(!is_numeric($pageNo)){
				show_404();
			}
			$where = 'shopname = "'.$this->sname.'" AND UNIX_TIMESTAMP(time_start)  <= unix_timestamp(now()) AND UNIX_TIMESTAMP(time_end)  >= unix_timestamp(now()) AND status = 1';
			$cses = $this->course_she_model->getByPage($where,$pageNo,5,"time_end asc",NULL);
			$this->load->view('book_course_view',$cses);
		}else{
			$this->load->view('no_permison_view');
		}	
	}

	function book_cshe(){
		$this->load->model('course_she_model');
		$this->load->model('bookrecord_model');
		$id = $this->input->post('cid');

		$cshe = $this->course_she_model->read("id = ".$id,NULL,NULL,NULL);
		//print_r($cshe);
		if($cshe[0]->hasjoin < $cshe[0]->limit){
			$where = "uid = ".$this->uid." AND cid = ".$cshe[0]->id;
			$res = $this->bookrecord_model->get_count($where);
			if($res > 0){
				echo '{"status":"02"}';
			}else{
				$data['uid'] = $this->uid;
				$data['uname'] = $this->uname;
				$data['cname'] = $cshe[0]->cname;
				$data['cid'] = $cshe[0]->id;
				$data['coach'] = $cshe[0]->coach;
				$data['shopname'] = $cshe[0]->shopname;
				$data['time'] = $cshe[0]->time;
				$data['createtime'] = date("Y-m-d H:i:s");
				$flag  = $this->bookrecord_model->create($data);
				$hj = $cshe[0]->hasjoin + 1;
				$this->course_she_model->update("id = ".$id,array('hasjoin' => $hj));
				if($flag){
					echo '{"status":"1"}';
				}
			}
		}else{
			echo '{"status":"01"}';
		}
	}
	
	
}


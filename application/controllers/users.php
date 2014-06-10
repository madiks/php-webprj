<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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

	function index(){
		$this->load->view('users_view');	
	}

	function change_pwd(){
		$this->load->model("user_model");
		$pwd = $this->input->post("password", TRUE);
		$data['pass'] = md5($pwd);
		$where  = "id =".$this->uid;
		$flag = $this->user_model->update($where,$data);
		if($flag){
			$this->session->unset_userdata('uname');
			$this->session->unset_userdata('uid');
			$this->session->unset_userdata('sname');
			$this->session->unset_userdata('status');
			redirect('/login', 'refresh');
		}
	}
	
	
}


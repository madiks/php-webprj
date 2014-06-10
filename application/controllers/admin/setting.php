<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Setting extends CI_Controller {

	var $aid;
	var $aname;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->aname = $this->session->userdata('aname');
		if(!$this->aname){
			redirect('/admin/alogin', 'refresh');	
		}else{
			$this->aid = $this->session->userdata('aid');
		}
	}

	function index(){
		$this->load->view('admin/setting_view');	
	}

	function change_pwd(){
		$this->load->model("admin_model");
		$pwd = $this->input->post("password", TRUE);
		$data['pass'] = md5($pwd);
		$where  = "id =".$this->aid;
		$flag = $this->admin_model->update($where,$data);
		if($flag){
			$this->session->unset_userdata('aname');
			$this->session->unset_userdata('aid');
			redirect('/admin/alogin', 'refresh');
		}
	}
	
	
}


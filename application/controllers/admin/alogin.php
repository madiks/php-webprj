<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->model('admin_model');
	}

	function index(){
		
		$this->load->view('admin_login_view');	
	}
	

	function go(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('uname', '帐号', 'trim|required|max_length[32]|xss_clean');
		$this->form_validation->set_rules('pass', '密码', 'required|min_length[3]|max_length[12]');
		if ( $this->form_validation->run() )
		{
			$data = $this->input->post();
			$uname = trim($data['uname']);
			$pass =md5(trim($data['pass']));
			$where = "uname =  '{$uname}' AND pass = '{$pass}'";
			$res = $this->admin_model->read($where,null,null,'id');
			if(!empty($res)){
				$wherec = 'id = '.$res[0]->id;
				$update_time = date("Y-m-d H:i:s");
				$this->admin_model->update($wherec,array('update_time' => $update_time));
				$this->session->set_userdata('aname',$uname);//将所有用户信息写进session
				$this->session->set_userdata('aid',$res[0]->id);
				redirect('/admin/backstage', 'refresh');
			}else{
				$data['errmsg'] = "用户名或密码错误！请重试。";
				$this->load->view('admin_login_view',$data);
			}
		}else{

			$this->load->view('admin_login_view');
		}	
	}
	
	public function login_out()
	{
		$this->session->unset_userdata('aname');
		$this->session->unset_userdata('aid');
		redirect('/admin/alogin', 'refresh');
	}
	
}


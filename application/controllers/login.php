<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('form');
	}

	function index(){	
		$this->load->view('login_view');	
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
			$res = $this->user_model->read($where,null,null,'id,sid,sname,status');
			if(!empty($res)){
				$wherec = 'id = '.$res[0]->id;
				$update_time = date("Y-m-d H:i:s");
				$this->user_model->update($wherec,array('update_time' => $update_time));
				$this->session->set_userdata('uname',$uname);//将所有用户信息写进session
				$this->session->set_userdata('uid',$res[0]->id);
				$this->session->set_userdata('sname',$res[0]->sname);
				$this->session->set_userdata('status',$res[0]->status);
				if(isset($data['remember'])){
					setcookie("userName",$uname,time()+7200,"/");
				}
				redirect('/', 'refresh');
			}else{
				$data['errmsg'] = "用户名或密码错误！请重试。";
				$this->load->view('login_view',$data);
			}
		}else{

			$this->load->view('login_view');
		}	
	}
	
	public function login_out()
	{
		$this->session->unset_userdata('uname');
		$this->session->unset_userdata('uid');
		$this->session->unset_userdata('sname');
		$this->session->unset_userdata('status');
		redirect('/login', 'refresh');
	}
}


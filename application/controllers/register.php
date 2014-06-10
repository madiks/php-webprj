<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->library('session');
	}

	function index(){
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");	
		$this->load->view('register_view',$data);	
	}
	

	function check_uname(){

		$uname = $this->input->post('chkvalue');
		$where = 'uname = "'.$uname.'"';
		$res = $this->user_model->get_count($where);
		if($res>0){
			echo '{"status":"fail"}';
		}else{
			echo '{"status":"ok"}';
		}
	}

	function create_account(){
		$this->load->model('shoplist_model');
		$data = $this->input->post();
        
        $tel = $data['tel'];
        $uname = $data['uname'];
        $password = md5($data['password']);
        $sid = $data['sid'];
        $where1 = 'id = '.$sid;
        $shopinfo = $this->shoplist_model->read($where1,null,null,'shopname');
        $array = array(
            'uname' => $uname, 
            'pass' => $password, 
            'tel' => $tel, 
            'sid' => $sid,
            'sname' => $shopinfo[0]->shopname,
            'create_time' => date('Y-m-d', time()), 
            'type' => 1, 
            'status' => 0 , 
            );
       
        $id = $this->user_model->create($array);
        $this->session->set_userdata('uname',$uname);
        $this->session->set_userdata('uid',$id);
        $this->session->set_userdata('status', 0);
        $this->session->set_userdata('sname',$shopinfo[0]->shopname);
        if($id){
        	redirect('/', 'refresh');
        }
	}
	
}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

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

	function index($pageNo = NUll){
		$this->load->model('user_model');
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}
		$this->load->model('shoplist_model');
		$data = $this->user_model->getByPage("status = 1",$pageNo,5,NULL,NULL);
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");

		//print_r($data);
		$this->load->view('admin/userlist_view',$data);	
	}
	
	function del_user($id=NULL){
		$this->load->model('user_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->user_model->delete("id = ".$id);
		if($flag){
			redirect('/admin/member', 'refresh');
		}

	}

	function modify_user(){
		$this->load->model('user_model');
		$id = $this->input->post('uid');
		$data['name'] = $this->input->post('name');
		$data['tel'] = $this->input->post('tel');
		$data['sname'] = $this->input->post('sname');
		$data['cardnum'] = $this->input->post('cardnum');
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		//print_r($data);
		$flag = $this->user_model->update("id = ".$id,$data);
		if($flag){
			echo '{"status":"ok"}';
		}else{
			echo '{"status":"error"}';
		}
	}

	function add(){
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");

		$this->load->view('admin/add_user_view',$data);	
	}

	function create_account(){
		$this->load->model('user_model');
		$data = $this->input->post();
	    
	    $tel = $data['tel'];
	    $uname = $data['uname'];
	    $password = md5($data['password']);
	  	$sname = $data['sname'];
	  	$cardnum = $data['cardnum'];
	  	$name = $data['name'];
	    $array = array(
	        'uname' => $uname, 
	        'pass' => $password, 
	        'tel' => $tel, 
	        'sname' => $sname,
	        'cardnum'=> $cardnum,
	        'name' => $name,
	        'aid' => $this->aid,
	        'author' => $this->aname, 
	        'create_time' => date('Y-m-d', time()), 
	        'type' => 1, 
	        'status' => 1, 
	        );
	   
	    $id = $this->user_model->create($array);
	    if($id){
	    	redirect('/admin/member', 'refresh');
	    }
	}

	function deal($pageNo = NUll){
		$this->load->model('user_model');
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}
		$this->load->model('shoplist_model');
		$data = $this->user_model->getByPage("status = 0",$pageNo,5,NULL,NULL);
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");

		//print_r($data);
		$this->load->view('admin/deal_reg_view',$data);	
	}

	function deal_userapply(){
		$this->load->model('user_model');
		$id = $this->input->post('uid');
		$data['name'] = $this->input->post('name');
		$data['sname'] = $this->input->post('sname');
		$data['cardnum'] = $this->input->post('cardnum');
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$data['status'] = 1;
		//print_r($data);
		$flag = $this->user_model->update("id = ".$id,$data);
		if($flag){
			echo '{"status":"ok"}';
		}else{
			echo '{"status":"error"}';
		}
	}

	function del_usera($id=NULL){
		$this->load->model('user_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->user_model->delete("id = ".$id);
		if($flag){
			redirect('/admin/member/deal', 'refresh');
		}

	}
	//查看会员详细
	function get_info($id=NULL,$pageNo = NULL){
		$this->load->model('user_model');
		$this->load->model('bookrecord_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		if($pageNo == ""){
				$pageNo = 1;
			}else if(!is_numeric($pageNo)){
				show_404();
		}
		$where = "uid = ".$id;
		$cses = $this->bookrecord_model->getByPage($where,$pageNo,5,"createtime desc",NULL);
		$data['cses'] = $cses;
		$uinfo = $this->user_model->read("id = ".$id,NULL,NULL,NULL);
		$data['uinfo'] = $uinfo[0];
		//print_r($data);
		$this->load->view('admin/userinfo_view',$data);	
	}
	
}


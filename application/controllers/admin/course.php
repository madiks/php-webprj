<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Controller {

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
		//$this->load->view('admin/calendar_she_view');
		$this->load->model('course_she_model');
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}
		$cses = $this->course_she_model->getByPage(NULL,$pageNo,5,NULL,NULL);
		//print_r($cses);
		$this->load->view('admin/manage_cshe_view',$cses);	
	}
	
	function del_cshe($id=NULL){
		$this->load->model('course_she_model');
		$this->load->model('bookrecord_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$this->bookrecord_model->delete("cid = ".$id);
		$flag = $this->course_she_model->delete("id = ".$id);

		if($flag){
			redirect('/admin/course', 'refresh');
		}
	}

	function add_cshe(){
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");
		$this->load->view('admin/add_cshe_view',$data);	
	}

	function add(){
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");
		$this->load->view('admin/add_cshe_view',$data);	
	}

	function cshe_save(){
		$this->load->model('course_she_model');

		$data = $this->input->post(NULL, TRUE);
		//print_r($data);
		$data['createtime'] = date("Y-m-d H:i:s");
		$data['hasjoin'] = 0;
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$flag = $this->course_she_model->create($data);
		if($flag){
			redirect('/admin/course', 'refresh');
		}
	}

	function edit_cshe($id){
		$this->load->model('course_she_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");
		$info = $this->course_she_model->read("id = ".$id,null,null,null);
		$data['info'] = $info[0];
		//print_r($data);
		$this->load->view('admin/edit_cshe_view',$data);
	}

	function cshe_saveedit($id = NULL){
		$this->load->model('course_she_model');

		$where = "id = ".$id;
		$data = $this->input->post(NULL, TRUE);
		$data['createtime'] = date("Y-m-d H:i:s");
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$flag = $this->course_she_model->update($where,$data);
		if($flag){
			redirect('/admin/course', 'refresh');
		}
	}
}


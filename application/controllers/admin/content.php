<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller {

	var $aid;
	var $aname;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('fitness_model');
		$this->aname = $this->session->userdata('aname');
		if(!$this->aname){
			redirect('/admin/alogin', 'refresh');	
		}else{
			$this->aid = $this->session->userdata('aid');
		}
	}

	function index($pageNo = NUll){
		
		$this->load->view('admin/shoplist_view');	
	}
	
	function add_fitness(){
		$this->load->view('admin/add_fitness_view');
	}

	function fitness_save(){
		$data = $this->input->post(NULL, TRUE);
		//print_r($data);
		$data['createtime'] = date("Y-m-d H:i:s");
		$data['updatetime'] = date("Y-m-d H:i:s");
		$data['status'] = 1;
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$flag = $this->fitness_model->create($data);
		$datas['flag'] = $flag;
		$this->load->view('admin/add_fitness_success_view',$datas);
	}

	function add_activity(){
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");
		//print_r($data);
		$this->load->view('admin/add_activity_view',$data);
	}

	function activity_save(){
		$this->load->model('activity_model');
		$data = $this->input->post(NULL, TRUE);
		$data['createtime'] = date("Y-m-d H:i:s");
		$data['updatetime'] = date("Y-m-d H:i:s");
		$data['status'] = 1;
		$data['type'] = 1;
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$flag = $this->activity_model->create($data);
		$datas['flag'] = $flag;
		$this->load->view('admin/add_activity_success_view',$datas);
	}


	function indexm(){
		$this->load->model('index_model');
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		//print_r($couls);
		$descmodel  = $this->index_model->read("type = 2 AND status = 1",null,null,null);
		$data['couls'] = $couls;
		$data['descs'] = $descmodel;
		$this->load->view('admin/indexm_view',$data);
	}

	function del_indexm($id=NULL){
		$this->load->model('index_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->index_model->delete("id = ".$id);

		if($flag){
			redirect('/admin/content/indexm', 'refresh');
		}
	}


	function about(){
		$this->load->model('about_model');
		$aboutitems = $this->about_model->readorder("type = 1","id,keyword,itemname,status,title,subtitle","id");
		//print_r($aboutitems);
		$data['aitems'] = $aboutitems;
		$this->load->view('admin/manage_about_view',$data);
	}

	function del_about($id=NULL){
		$this->load->model('about_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->about_model->delete("id = ".$id);

		if($flag){
			redirect('/admin/content/about', 'refresh');
		}
	}	
	

	function editabout($id){
		$this->load->model('about_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$info = $this->about_model->readorder("id = ".$id,null,null);
		$data['info'] = $info[0];
		$this->load->view('admin/edit_about_view',$data);
	}

	function about_save($id = NULL){
		$this->load->model('about_model');
		if($id == ""){
			
			$data = $this->input->post(NULL, TRUE);
			$data['createtime'] = date("Y-m-d H:i:s");
			$data['updatetime'] = date("Y-m-d H:i:s");
			$data['type'] = 1;
			$data['author'] = $this->aname;
			$data['aid'] = $this->aid;
			$flag = $this->about_model->create($data);
			if($flag){
				redirect('/admin/content/about', 'refresh');
			}
		}else{
			$where = "id = ".$id;
			$data = $this->input->post(NULL, TRUE);
			$data['updatetime'] = date("Y-m-d H:i:s");
			$data['author'] = $this->aname;
			$data['aid'] = $this->aid;
			$flag = $this->about_model->update($where,$data);
			if($flag){
				redirect('/admin/content/about', 'refresh');
			}
		}
	}

	function newabout(){
		$this->load->view('admin/new_about_view');
	}

	function activity($pageNo = NUll){
		$this->load->model('activity_model');
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}
		$Activitys = $this->activity_model->getByPage("status = 1",$pageNo,5,'updatetime desc',"id,title,updatetime,sname");
		//print_r($Activitys);
		$data['infos'] = $Activitys;
		//print_r($data);
		$this->load->view('admin/manage_activity_view',$data);
	}

	function del_activity($id=NULL){
		$this->load->model('activity_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->activity_model->delete("id = ".$id);

		if($flag){
			redirect('/admin/content/activity', 'refresh');
		}
	}

	function edit_activity($id=NULL){
		$this->load->model('activity_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$this->load->model('shoplist_model');
		$data['shoplist'] = $this->shoplist_model->read(null,null,null,"id,shopname");
		$act = $this->activity_model->read('id = '.$id,null,null,null);
		//print_r($act);
		$data['act'] = $act[0];
		$this->load->view('admin/edit_activity_view',$data);
	}

	function activity_saveedit($id=NULL){
		$this->load->model('activity_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$data = $this->input->post(NULL, TRUE);
		$data['updatetime'] = date("Y-m-d H:i:s");
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$where = "id = ".$id;
		//print_r($data);
		$flag = $this->activity_model->update($where,$data);
		if($flag){
			redirect('/admin/content/activity', 'refresh');
		}
	}

	function service(){
		$this->load->model('about_model');
		$where2 = 'keyword = "services" AND type = 2 AND status = 1';
		$info = $this->about_model->readorder($where2,null,null);
		$data['info'] = $info[0];
		$this->load->view('admin/edit_service_view',$data);	
	}

	function service_save($id = NULL){
		$this->load->model('about_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$where = "id = ".$id;
		$data = $this->input->post(NULL, TRUE);
		$data['updatetime'] = date("Y-m-d H:i:s");
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$flag = $this->about_model->update($where,$data);
		if($flag){
			redirect('/admin/content/service', 'refresh');
		}

	}

	//健身常识管理
	function fitness($pageNo = NUll){
		$this->load->model('fitness_model');
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}
		$Fits = $this->fitness_model->getByPage('status = 1',$pageNo,5,'updatetime desc','id,title,updatetime');
		//print_r($Fits);
		$data['fits'] = $Fits;
		//print_r($data);
		$this->load->view('admin/manage_fitness_view',$data);
	}

	function del_fitness($id=NULL){
		$this->load->model('fitness_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->fitness_model->delete("id = ".$id);

		if($flag){
			redirect('/admin/content/fitness', 'refresh');
		}
	}

	function edit_fitness($id=NULL){
		$this->load->model('fitness_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$act = $this->fitness_model->read('id = '.$id,null,null,null);
		//print_r($act);
		$data['fit'] = $act[0];
		$this->load->view('admin/edit_fitness_view',$data);
	}



	function fitness_saveedit($id=NULL){
		$this->load->model('fitness_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$data = $this->input->post(NULL, TRUE);
		$data['updatetime'] = date("Y-m-d H:i:s");
		$data['author'] = $this->aname;
		$data['aid'] = $this->aid;
		$where = "id = ".$id;
		//print_r($data);
		$flag = $this->fitness_model->update($where,$data);
		if($flag){
			redirect('/admin/content/fitness', 'refresh');
		}
	}


	function courses(){
		$this->load->model('course_model');
		$this->load->model('course_type_model');
	
		$course_type = $this->course_type_model->read(null,null,null,'id,type');
		//print_r($course_type);

		foreach ($course_type as $key => $val) {
			$where2 = 'status = 1 AND type = '.$val->id;
			$courselist = $this->course_model->read($where2,null,null,'id,name,type');
			$course_type[$key]->courselist = $courselist;
		}
		//print_r($course_type);
		$data['infos'] = $course_type;
		$this->load->view('admin/manage_courses_view',$data);
	}

	function del_courseinfo($id=NULL){
		$this->load->model('course_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}

		$flag = $this->course_model->delete("id = ".$id);

		if($flag){
			redirect('/admin/content/courses', 'refresh');
		}
	}

	function del_coursetype($id=NULL){
		$this->load->model('course_model');
		$this->load->model('course_type_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$this->db->trans_start();
		$this->course_model->delete("type = ".$id);
		$this->course_type_model->delete("id = ".$id);
		$this->db->trans_complete();
		redirect('/admin/content/courses', 'refresh');
		
	}


	function modify_ctype(){
		$this->load->model('course_type_model');
		$id = $this->input->post('tid');
		$data['type'] = $this->input->post('typename');
		$data['createtime'] = date("Y-m-d H:i:s");
		//print_r($data);
		$flag = $this->course_type_model->update("id = ".$id,$data);
		if($flag){
			echo '{"status":"ok"}';
		}else{
			echo '{"status":"error"}';
		}
	}

	function add_coursetype(){
		$this->load->model('course_type_model');
		
		$data['type'] = $this->input->post('typename');
		$data['createtime'] = date("Y-m-d H:i:s");
		$flag = $this->course_type_model->create($data);
		if($flag){
			echo '{"status":"ok"}';
		}else{
			echo '{"status":"error"}';
		}
	}

	function add_course($id = NULL){
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$data['tid'] = $id;
		$this->load->view('admin/add_course_view',$data);
	}

	function course_save(){
		$this->load->model('course_model');
		$data = $this->input->post(NULL, TRUE);
		$data['createtime'] = date("Y-m-d H:i:s");
		$data['status'] = 1;
		//print_r($data);
		$flag = $this->course_model->create($data);
		if($flag){
			redirect('/admin/content/courses', 'refresh');
		}
	}

	function edit_coursei($id = NULL){
		$this->load->model('course_model');
				$this->load->model('course_type_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$type = $this->course_type_model->read(NULL,NULL,NULL,"id,type");
		//print_r($type);
		$data['type'] = $type;
		$info = $this->course_model->read("id = ".$id,NULL,NULL,NULL);
		//print_r($info);
		$data['info'] = $info[0];
		$this->load->view('admin/edit_course_view',$data);
	}

	function course_saveedit($id = NULL){
		$this->load->model('course_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$data = $this->input->post(NULL, TRUE);
		$data['createtime'] = date("Y-m-d H:i:s");
		//print_r($data);
		$flag = $this->course_model->update("id = ".$id,$data);
		if($flag){
			redirect('/admin/content/courses', 'refresh');
		}
	}
		
}


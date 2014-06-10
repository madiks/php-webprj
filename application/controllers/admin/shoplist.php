<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shoplist extends CI_Controller {

	var $aid;
	var $aname;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('shoplist_model');
		$this->aname = $this->session->userdata('aname');
		if(!$this->aname){
			redirect('/admin/alogin', 'refresh');	
		}else{
			$this->aid = $this->session->userdata('aid');
		}
	}

	function index($pageNo = NUll){
		if($pageNo == ""){
			$pageNo = 1;
		}else if(!is_numeric($pageNo)){
			show_404();
		}

		$Shoplist = $this->shoplist_model->getByPage(null,$pageNo,10,null);//第三参数为每页信息条数
		//print_r($Shoplist);
		$this->load->view('admin/shoplist_view',$Shoplist);	
	}
	

	function modifyshop(){
		$sid = $this->input->post('sid');
		$data['shopname'] = $this->input->post('shopname');
		$data['tel'] = $this->input->post('tel');
		$data['address'] = $this->input->post('address');
		$data['managerinfo'] = $this->input->post('mannagerinfo');
		//print_r($data);
		$flag = $this->shoplist_model->update("id = ".$sid,$data);
		if($flag){
			echo '{"status":"ok"}';
		}else{
			echo '{"status":"error"}';
		}
	}

	function delshop($sid = NUll){
		if($sid == ""){
			show_404();
		}else if(!is_numeric($sid)){
			show_404();
		}

		$flag = $this->shoplist_model->delete("id = ".$sid);

		if($flag){
			redirect('/admin/shoplist', 'refresh');
		}
	}


	function add(){
		$this->load->view('admin/add_shop_view');	
	}

	function save_shop(){
		$data = $this->input->post(NULL, TRUE);
		//print_r($data);
		$info['shopname'] = $data['sname'];
		$info['address'] = $data['address'];
		$info['tel'] = $data['tel'];
		$info['managerinfo'] = $data['info'];
		$flag = $this->shoplist_model->create($info);
		$datas['flag'] = $flag;
		$this->load->view('admin/add_shop_success_view',$datas);
		
	}
	
}


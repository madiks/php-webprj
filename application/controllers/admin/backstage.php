<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backstage extends CI_Controller {

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
		$this->load->model("user_model");
		$this->load->model("course_she_model");
		$this->load->model("shoplist_model");
		$data['user_num'] = $this->user_model->get_count("status = 1");
		$data['cshe_num'] = $this->course_she_model->get_count();
		$data['shop_num'] = $this->shoplist_model->get_count();
		$shoplist = $this->shoplist_model->read(NULL,NULL,NULL,"id,shopname");
		$cd = array();
		$cs = new stdClass();
		foreach ($shoplist as $key=>$sl) {
			$where = 'status = 1 and sname = "'.$sl->shopname.'"';
			$cs->tag = $sl->shopname;
			$cs->value =  $this->user_model->get_count($where);
			$cs->color = "#".$this->randColor();
			$cd[$key] = $cs;
			$cs = new stdClass(); 
		}
		//print_r($cd);
		$data['chartdata'] = $cd;
		$data["cd"] = json_encode($cd); 
		$dstr = array();
		$dnum = array();
		for ($i=0; $i <= 6 ; $i++) { 
			$dstr[$i] = date("Y-m-d",(time()-(6-$i)*3600*24));
		}
		//print_r($dstr);
		$data['day'] = json_encode($dstr);  
		for ($i=0; $i <= 6 ; $i++) { 
			$where1 = "create_time = '".$dstr[$i]."'";
			$dunm[$i] =  $this->user_model->get_count($where1);
		}
		//print_r($dunm);		//print_r($data);
		$data['count'] = json_encode($dunm);
		//echo "#".$this->randColor();
		$this->load->view('admin/backstage_view',$data);	
	}

	function randColor(){
	    $colors = array();
	    for($i = 0;$i<6;$i++){
	        $colors[] = dechex(rand(0,15));
	    }
	    return implode('',$colors);
	}
	
	
}


<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('index_model');
		$this->load->helper('url');
		$this->load->model('course_model');
		$this->load->model('course_type_model');
		$this->load->library('session');
	}

	function index(){
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;
		$course_type = $this->course_type_model->read(null,null,null,'id,type');
		//print_r($course_type);

		foreach ($course_type as $key => $val) {
			$where2 = 'status = 1 AND type = '.$val->id;
			$courselist = $this->course_model->read($where2,null,null,'id,name,type');
			$course_type[$key]->courselist = $courselist;
		}
		$data['navid'] = $course_type[0]->id;
		//print_r($course_type);
		$data['course_nav'] = $course_type;
		$where3 = 'status = 1 AND id = '.$course_type[0]->courselist[0]->id;
		$info = $this->course_model->read($where3,null,null,null);
		//print_r($info);
		$data['info'] = $info[0];
		$this->load->view('course_view',$data);	
	}

	function details($keyid = null){
		if($keyid == ""){
			show_404();
		}
		//echo $keyword;
		$navitems = $this->course_model->read("status = 1",null,null,"id,type");
		//print_r($navitems);
		$da = $this->isexits($navitems,$keyid);
		if(!$da['res']){
			show_404();
		}
		$data['navid'] = $da['type'];
		//读取轮播图
		$where1 = "type = 1 AND status = 1";
		$couls = $this->index_model->read($where1,null,null,null);
		$data['couls'] = $couls;
		$course_type = $this->course_type_model->read(null,null,null,'id,type');
		//print_r($course_type);

		foreach ($course_type as $key => $val) {
			$where2 = 'status = 1 AND type = '.$val->id;
			$courselist = $this->course_model->read($where2,null,null,'id,name,type');
			$course_type[$key]->courselist = $courselist;
		}
		$data['course_nav'] = $course_type;
		$where3 = 'status = 1 AND id = '.$keyid;
		$info = $this->course_model->read($where3,null,null,null);
		//print_r($info);
		$data['info'] = $info[0];
		$this->load->view('course_view',$data);
	}

	private function isexits($data,$value){
		$res = 0;
		//print_r($data);
		foreach ($data as $key => $val) {
			if($val->id==$value){
				$res = 1;
				$da['type'] = $val->type;
			}
		}
		$da['res'] = $res;

		return $da;
	}
	
}


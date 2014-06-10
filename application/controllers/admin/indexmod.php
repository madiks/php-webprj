<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Indexmod extends CI_Controller {

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

	/*function index(){
		
		$this->load->view('admin/shoplist_view');	
	}*/
	
	function newcoul(){
		$this->load->view('admin/new_index_coul_view');	
	}
	
	function save_coul(){
		$this->load->model('index_model');
		 // 把需要的配置放入config数组
        $config['upload_path'] = './public/img';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '102400';
        $this -> load -> library('upload', $config); //调用CI的upload类
        //$this -> upload -> do_upload('img'); //使用do_upload('上传框的name')方法进行上传
        $datafile = $this->input->post(NULL, TRUE);
        // 以下代码为拓展的，非必要
        if ($this -> upload -> do_upload('img')) { //上传成功
            $data = array('upload_data' => $this -> upload -> data()); //将文件信息存入数组
            //var_dump($data); //打印文件信息
            //print_r($data);
            $datafile['img'] = "public/img/".$data['upload_data']['file_name'];
            $datafile['createtime'] = date("Y-m-d H:i:s");
			$datafile['updatetime'] = date("Y-m-d H:i:s");
			$datafile['type'] = 1;
            //print_r($datafile);
            $flag = $this->index_model->create($datafile);
            redirect('/admin/content/indexm', 'refresh');	
        } else { //上传失败
            $error = array('error' => $this -> upload -> display_errors());//将错误信息存入数组
            var_dump($error); //打印错误信息
            echo "上传文件失败！请返回重试。";
        }
	}

	function edit_coul($id=NULL){
		$this->load->model('index_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$coul = $this->index_model->read("id = ".$id,NULL,NULL,NULL);
		//print_r($coul[0]);
		$data['coul'] = $coul[0];
		$this->load->view('admin/edit_coul_view',$data);
	}

	function editsave_coul($id=NULL){
		$this->load->model('index_model');
		if($id == ""){
			show_404();
		}else if(!is_numeric($id)){
			show_404();
		}
		$datafile = $this->input->post(NULL, TRUE);
		//print_r($datafile);
		//print_r($_FILES);
		if (empty($_FILES['img']['name'])) { //检查文件上传表单是否有选择文件
			$flag = $this->index_model->update("id = ".$id,$datafile);
			redirect('/admin/content/indexm', 'refresh');
		}else{
			//echo "1";
			 // 把需要的配置放入config数组
	        $config['upload_path'] = './public/img';
	        $config['allowed_types'] = 'gif|jpg|png';
	        $config['max_size'] = '102400';
	        $this -> load -> library('upload', $config); //调用CI的upload类
            if ($this -> upload -> do_upload('img')) { //上传成功
                $data = array('upload_data' => $this -> upload -> data()); //将文件信息存入数组
                //var_dump($data); //打印文件信息
                //print_r($data);
                $datafile['img'] = "public/img/".$data['upload_data']['file_name'];
    			$datafile['updatetime'] = date("Y-m-d H:i:s");
    			$datafile['type'] = 1;
                //print_r($datafile);
                $flag = $this->index_model->update("id = ".$id,$datafile);
                redirect('/admin/content/indexm', 'refresh');	
            } else { //上传失败
                $error = array('error' => $this -> upload -> display_errors());//将错误信息存入数组
                var_dump($error); //打印错误信息
                echo "上传文件失败！请返回重试。";
            }
		}


	}


	function newdesc(){
		$this->load->view('admin/new_desc_view');	
	}

	function save_desc(){
				$this->load->model('index_model');
				 // 把需要的配置放入config数组
		        $config['upload_path'] = './public/img';
		        $config['allowed_types'] = 'gif|jpg|png';
		        $config['max_size'] = '102400';
		        $this -> load -> library('upload', $config); //调用CI的upload类
		        //$this -> upload -> do_upload('img'); //使用do_upload('上传框的name')方法进行上传
		        $datafile = $this->input->post(NULL, TRUE);
		        // 以下代码为拓展的，非必要
		        if ($this -> upload -> do_upload('img')) { //上传成功
		            $data = array('upload_data' => $this -> upload -> data()); //将文件信息存入数组
		            //var_dump($data); //打印文件信息
		            //print_r($data);
		            $datafile['img'] = "public/img/".$data['upload_data']['file_name'];
		            $datafile['createtime'] = date("Y-m-d H:i:s");
					$datafile['updatetime'] = date("Y-m-d H:i:s");
					$datafile['type'] = 2;
		            //print_r($datafile);
		            $flag = $this->index_model->create($datafile);
		            redirect('/admin/content/indexm', 'refresh');	
		        } else { //上传失败
		            $error = array('error' => $this -> upload -> display_errors());//将错误信息存入数组
		            var_dump($error); //打印错误信息
		            echo "上传文件失败！请返回重试。";
		        }
	}



		function edit_desc($id=NULL){
			$this->load->model('index_model');
			if($id == ""){
				show_404();
			}else if(!is_numeric($id)){
				show_404();
			}
			$desc = $this->index_model->read("id = ".$id,NULL,NULL,NULL);
			//print_r($coul[0]);
			$data['desc'] = $desc[0];
			$this->load->view('admin/edit_desc_view',$data);
		}

		function editsave_desc($id=NULL){
			$this->load->model('index_model');
			if($id == ""){
				show_404();
			}else if(!is_numeric($id)){
				show_404();
			}
			$datafile = $this->input->post(NULL, TRUE);
			//print_r($datafile);
			//print_r($_FILES);
			if (empty($_FILES['img']['name'])) { //检查文件上传表单是否有选择文件
				$flag = $this->index_model->update("id = ".$id,$datafile);
				redirect('/admin/content/indexm', 'refresh');
			}else{
				//echo "1";
				 // 把需要的配置放入config数组
		        $config['upload_path'] = './public/img';
		        $config['allowed_types'] = 'gif|jpg|png';
		        $config['max_size'] = '102400';
		        $this -> load -> library('upload', $config); //调用CI的upload类
	            if ($this -> upload -> do_upload('img')) { //上传成功
	                $data = array('upload_data' => $this -> upload -> data()); //将文件信息存入数组
	                //var_dump($data); //打印文件信息
	                //print_r($data);
	                $datafile['img'] = "public/img/".$data['upload_data']['file_name'];
	    			$datafile['updatetime'] = date("Y-m-d H:i:s");
	    			$datafile['type'] = 2;
	                //print_r($datafile);
	                $flag = $this->index_model->update("id = ".$id,$datafile);
	                redirect('/admin/content/indexm', 'refresh');	
	            } else { //上传失败
	                $error = array('error' => $this -> upload -> display_errors());//将错误信息存入数组
	                var_dump($error); //打印错误信息
	                echo "上传文件失败！请返回重试。";
	            }
			}


		}
	
}


<?php

class About_model extends CI_Model
{

    /**
     * 构造方法
     */
    public function __construct ()
    {
        parent::__construct();
        $this->load->database();
    }

    /**
     * 添加信息
     */
    public function create ($data)
    {
        $this->db->insert('about', $data);
        $id = $this->db->insert_id();
        return empty($id) ? false : $id;
    }



    /* 修改信息 */
    function update($where = NULL,$data = NULL){
        $this->db->where($where);
        $this->db->update('about',$data);
        $num = $this->db->affected_rows();
        return $num ? true : false;
    }

    

    function delete($where = null){
        if(!empty($where)) $this->db->where($where);
        $this->db->delete('about');
        $num = $this->db->affected_rows();
        return $num ? true : false; 
    }

    

    function read($where = NULL,$limit = NULL,$offset = NULL,$fields = NULL)
    {
        if(!empty($fields)) $this->db->select($fields);
        if(!empty($where)) $this->db->where($where);
        $items =  $this->db->get('about',$limit,$offset);
        return $items->result();
    }

    function readorder($where,$fields,$orderby){
        if(!empty($fields)) $this->db->select($fields);
        if(!empty($fields)) $this->db->order_by($orderby); 
        if(!empty($where)) $this->db->where($where);
        $items =  $this->db->get('about');
        return $items->result();
    }

    function getkeywords($where){
        if(!empty($where)) $this->db->where($where);
        $this->db->select("keyword");
        $items =  $this->db->get('about');
        return $items->result_array();
    }
}
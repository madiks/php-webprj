<?php

/**
 * 
 */
class Course_model extends CI_Model
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
        $this->db->insert('course', $data);
        $id = $this->db->insert_id();
        return empty($id) ? false : $id;
    }



    /* 修改信息 */
    function update($where = NULL,$data = NULL){
        $this->db->where($where);
        $this->db->update('course',$data);
        $num = $this->db->affected_rows();
        return $num ? true : false;
    }

    

    function delete($where = null){
        if(!empty($where)) $this->db->where($where);
        $this->db->delete('course');
        $num = $this->db->affected_rows();
        return $num ? true : false; 
    }

    

    function read($where = NULL,$limit = NULL,$offset = NULL,$fields = NULL)
    {
        if(!empty($fields)) $this->db->select($fields);
        if(!empty($where)) $this->db->where($where);
        $items =  $this->db->get('course',$limit,$offset);
        return $items->result();
    }
}
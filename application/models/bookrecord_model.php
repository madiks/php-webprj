<?php

/**
 * 
 */
class Bookrecord_model extends CI_Model
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
        $this->db->insert('bookrecord', $data);
        $id = $this->db->insert_id();
        return empty($id) ? false : $id;
    }



    /* 修改信息 */
    function update($where = NULL,$data = NULL){
        $this->db->where($where);
        $this->db->update('bookrecord',$data);
        $num = $this->db->affected_rows();
        return $num ? true : false;
    }

    

    function delete($where = null){
        if(!empty($where)) $this->db->where($where);
        $this->db->delete('bookrecord');
        $num = $this->db->affected_rows();
        return $num ? true : false; 
    }

    

    function read($where = NULL,$limit = NULL,$offset = NULL,$fields = NULL)
    {
        if(!empty($fields)) $this->db->select($fields);
        if(!empty($where)) $this->db->where($where);
        $items =  $this->db->get('bookrecord',$limit,$offset);
        return $items->result();
    }

     /* 获取总数 */
    function get_count($where = NULL){
        if(!empty($where)) $this->db->where($where);
        return $this->db->count_all_results('bookrecord');
    }

    function getByPage($where = NULL, $pageNo = NULL, $pageCount, $order = NULL, $fields){
        if(empty($pageNo)) $pageNo = 1;
        if(!empty($where)){
            $tatolCount = $this->get_count($where);
        }else{
            $tatolCount = $this->get_count();
        }
        $totalPageNum = ceil($tatolCount/$pageCount);
        if(!empty($pageNo)&&$pageNo != 1){
            $offset = ($pageNo - 1)*$pageCount;
        }else{
            $offset = 0;
        }
        if(!empty($fields)) $this->db->select($fields);
        if(!empty($where)) $this->db->where($where);

        if(!empty($order)){
            $this->db->order_by($order);
        }else{
            $this->db->order_by('createtime desc');
        }
        $res =  $this->db->get('bookrecord', $pageCount, $offset);
        $data['brd'] = $res->result();
        $data['link']['totalPageNum'] = $totalPageNum;
        $data['link']['pageNo'] = $pageNo;
        $data['tatolCount'] = $tatolCount;
        return $data; 

    }
}
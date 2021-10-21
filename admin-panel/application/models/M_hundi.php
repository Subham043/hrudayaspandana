<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hundi extends CI_Model {



    public function hundiGet($var = null)
    {
        // $query =  $this->db->where('payment_status',1)->order_by('id', 'desc')->get('hundi')->result();    
        $query =  $this->db->order_by('id', 'desc')->get('hundi')->result();    
        return $query;
    }

    public function getHundi($id)
    {
        return  $this->db->where('id',$id)->get('hundi')->row();
    }

    public function insertHundi($data)
    {
        $this->db->insert('hundi',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function updateHundi($data, $id){
        $this->db->where('id',$id);
		if($this->db->update('hundi', $data)){
            return true;
        }else{
            return false;
        }
		
    }

    public function deleteHundi($id){
        $this->db->where('id',$id);
		if($this->db->delete('hundi')){
            return true;
        }else{
            return false;
        }
		
    }

    

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
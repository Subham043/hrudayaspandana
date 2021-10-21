<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_events extends CI_Model {

    public function insertEvents($data)
    {
        $this->db->insert('events',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }


    public function getEvent($id){
        return  $this->db->where('id',$id)->get('events')->row();
    }

    public function deleteEvent($id){
        $this->db->where('id',$id);
		if($this->db->delete('events')){
            return true;
        }else{
            return false;
        }
		
    }

    public function updateEvent($data, $id){
        $this->db->where('id',$id);
		if($this->db->update('events', $data)){
            return true;
        }else{
            return false;
        }
		
    }

    public function eventGet($type){
        return  $this->db->where('type', $type)->order_by('id','desc')->get('events')->result();
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
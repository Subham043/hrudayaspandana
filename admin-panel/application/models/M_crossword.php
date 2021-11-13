<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_crossword extends CI_Model {

    public function insertCrossword($data)
    {
        $this->db->insert('crossword',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function getCrossword($id){
        return  $this->db->where('id',$id)->get('crossword')->row();
    }

    public function deleteCrossword($id){
        $this->db->where('id',$id);
		if($this->db->delete('crossword')){
            return true;
        }else{
            return false;
        }
		
    }

    public function getAllCrossword(){
        return  $this->db->order_by('id','desc')->get('crossword')->result();
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
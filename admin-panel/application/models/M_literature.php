<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_literature extends CI_Model {

    public function insertLiterature($data)
    {
        $this->db->insert('literature',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function getLiteratureImage($id){
        return  $this->db->where('id',$id)->get('literature')->row();
    }

    public function getLiterature($id){
        return  $this->db->where('id',$id)->get('literature')->row();
    }

    public function deleteLiteratureImage($id){
        $this->db->where('id',$id);
		if($this->db->delete('literature')){
            return true;
        }else{
            return false;
        }
		
    }

    public function literatureGet(){
        return  $this->db->order_by('id','desc')->get('literature')->result();
    }

    public function updateLiterature($data, $id){
        $this->db->where('id',$id);
		if($this->db->update('literature', $data)){
            return true;
        }else{
            return false;
        }
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
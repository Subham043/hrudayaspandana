<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {


    public function getHomeVideo($id)
    {
        return  $this->db->where('id',$id)->get('video')->row();
    }

    public function insertHomeVideo($data,$id)
    {
        $this->db->where('id', $id);
        if($this->db->update('video', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function insertBannerImage($data)
    {
        $this->db->insert('banner',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function getBannerImage()
    {
        return  $this->db->order_by('id','desc')->get('banner')->result();
    }

    public function getHomeBannerImage($id){
        return  $this->db->where('id',$id)->get('banner')->row();
    }

    public function deleteHomeBannerImage($id){
        $this->db->where('id',$id);
		if($this->db->delete('banner')){
            return true;
        }else{
            return false;
        }
		
    }


}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
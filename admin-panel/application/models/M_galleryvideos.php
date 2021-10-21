<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galleryvideos extends CI_Model {

    public function insertGalleryVideo($data)
    {
        $this->db->insert('gallery-videos',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function deleteGalleryVideos($id){
        $this->db->where('id',$id);
		if($this->db->delete('gallery-videos')){
            return true;
        }else{
            return false;
        }
		
    }

    public function galleryVideosGet($type){
        return  $this->db->where('category', $type)->where('service_id', null)->order_by('id','desc')->get('gallery-videos')->result();
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
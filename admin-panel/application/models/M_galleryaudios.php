<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_galleryaudios extends CI_Model {

    public function insertHomeGalleryAudio($data)
    {
        $this->db->insert('gallery-audios',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function getHomeGalleryAudio($id){
        return  $this->db->where('id',$id)->get('gallery-audios')->row();
    }

    public function deleteHomeGalleryAudio($id){
        $this->db->where('id',$id);
		if($this->db->delete('gallery-audios')){
            return true;
        }else{
            return false;
        }
		
    }

    public function galleryGet1(){
        return  $this->db->where('category', 'Madhava Seva')->where('service_id', null)->order_by('id','desc')->get('gallery')->result();
    }

    public function galleryGet2(){
        return  $this->db->where('category', 'Manava Seva')->where('service_id', null)->order_by('id','desc')->get('gallery')->result();
    }

    public function galleryGetByType($type){
        return  $this->db->where('category', $type)->where('service_id', null)->order_by('id','desc')->get('gallery-audios')->result();
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_services extends CI_Model {

    public function insertServices($data)
    {
        $this->db->insert('services',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function insertGallery($data)
    {
        $this->db->insert('gallery',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function insertGalleryAudio($data)
    {
        $this->db->insert('gallery-audios',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function insertGalleryImage($data)
    {
        $this->db->insert('gallery',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }


    public function getService($id){
        return  $this->db->where('id',$id)->get('services')->row();
    }

    public function deleteService($id){
        $this->db->where('id',$id);
		if($this->db->delete('services')){
            return true;
        }else{
            return false;
        }
		
    }

    public function updateService($data, $id){
        $this->db->where('id',$id);
		if($this->db->update('services', $data)){
            return true;
        }else{
            return false;
        }
		
    }

    public function updateServiceGallery($data, $id){
        $this->db->where('service_id',$id);
		if($this->db->update('gallery', $data)){
            return true;
        }else{
            return false;
        }
		
    }
    public function updateServiceGalleryVideo($data, $id){
        // print_r($data);echo $id;exit;
        $this->db->where('service_id',$id);
		if($this->db->update('gallery-videos', $data)){
            return true;
        }else{
            return false;
        }
		
    }
    public function updateServiceGalleryAudio($data, $id){
        $this->db->where('service_id',$id);
		if($this->db->update('gallery-audios', $data)){
            return true;
        }else{
            return false;
        }
		
    }

    public function serviceGet($type){
        return  $this->db->where('type', $type)->order_by('id','desc')->get('services')->result();
    }

    public function serviceGetById($id){
        return  $this->db->where('service_id', $id)->order_by('id','desc')->get('gallery')->result();
    }

    public function serviceAudioGetById($id){
        return  $this->db->where('service_id', $id)->order_by('id','desc')->get('gallery-audios')->result();
    }

    public function getHomeGalleryAudio($id){
        return  $this->db->where('id',$id)->get('gallery-audios')->row();
    }

    public function getHomeGalleryImage($id){
        return  $this->db->where('id',$id)->get('gallery')->row();
    }

    public function deleteHomeGalleryImage($id){
        $this->db->where('id',$id);
		if($this->db->delete('gallery')){
            return true;
        }else{
            return false;
        }
		
    }

    public function deleteHomeGalleryVideo($id){
        $this->db->where('service_id',$id);
		if($this->db->delete('gallery-videos')){
            return true;
        }else{
            return false;
        }
		
    }

    public function deleteHomeGalleryAudio($id){
        $this->db->where('id',$id);
		if($this->db->delete('gallery-audios')){
            return true;
        }else{
            return false;
        }
		
    }

    public function galleryVideosGet($service_id){
        return  $this->db->where('service_id', $service_id)->order_by('id','desc')->get('gallery-videos')->result();
    }

    public function getVideoServiceOne($id){
        return  $this->db->where('id', $id)->order_by('id','desc')->get('gallery-videos')->row();
    }

    public function deleteGalleryVideo($id){
        $this->db->where('id',$id);
		if($this->db->delete('gallery-videos')){
            return true;
        }else{
            return false;
        }
		
    }

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

    public function galleryGetByServiceId($id){
        return  $this->db->where('service_id', $id)->order_by('id','desc')->get('gallery-audios')->result();
    }

    public function galleryImageGetByServiceId($id){
        return  $this->db->where('service_id', $id)->order_by('id','desc')->get('gallery')->result();
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

    public function getUserData($id){
        $query = $this->db->select('id,fname,lname,phone,email')->where('id', $id)->where('verified', 1)->get('user');
        return $query->row();
    }

    public function insertContact($data)
	{
        $this->db->insert('contact',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
	}

    public function deleteContact($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('contact');
		return true;
	}

    public function insertSubscriptionData($data)
	{
        $this->db->insert('subscribe',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return true;
        }else{
            return false;
        }
	}

    public function insertVolunteer($data)
	{
        $this->db->insert('volunteer',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
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

    public function getHundi($id)
	{
        $this->db->where('id', $id);
        $query = $this->db->get('hundi');
        return $query->row();
	}

    public function updateHundiPayment($data,$id)
	{
        $data['payment_status'] = 1;
        $this->db->where('id', $id);
        $this->db->update('hundi', $data);
        return true;
	}

    public function insertDonation($data)
	{
        $this->db->insert('donation',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
	}

    public function get_payment_info($id)
	{
        $this->db->where('id', $id);
        $query = $this->db->get('donation');
        return $query->row();
	}

    public function getDonation($id)
	{
        $this->db->where('id', $id);
        $query = $this->db->get('donation');
        return $query->row();
	}

    public function updateDonationPayment($data,$id)
	{
        $data['payment_status'] = 1;
        $this->db->where('id', $id);
        $this->db->update('donation', $data);
        return true;
	}

    public function getBanner(){
        return $this->db->order_by('id','desc')->get('banner')->result();
    }

    public function getGallery(){
        return $this->db->order_by('id','desc')->limit(8)->get('gallery')->result();
    }

    public function getSignleServiceGallery($id){
        return $this->db->where('service_id',$id)->order_by('id','desc')->get('gallery')->result();
    }

    public function getSignleServiceGalleryVideo($id){
        return $this->db->where('service_id',$id)->order_by('id','desc')->get('gallery-videos')->result();
    }

    public function getSignleServiceGalleryAudio($id){
        return $this->db->where('service_id',$id)->order_by('id','desc')->get('gallery-audios')->result();
    }

    public function getAllGallery(){
        return $this->db->order_by('id','desc')->get('gallery')->result();
    }

    public function getAllGalleryCategory(){
        return $this->db->select('category')->order_by('id','desc')->group_by('category')->get('gallery')->result();
    }

    public function getAllGalleryVideos(){
        return $this->db->order_by('id','desc')->get('gallery-videos')->result();
    }

    public function getAllGalleryVideosCategory(){
        return $this->db->select('category')->order_by('id','desc')->group_by('category')->get('gallery-videos')->result();
    }

    public function getAllGalleryAudios(){
        return $this->db->order_by('id','desc')->get('gallery-audios')->result();
    }

    public function getAllGalleryAudiosCategory(){
        return $this->db->select('category')->order_by('id','desc')->group_by('category')->get('gallery-audios')->result();
    }

    public function getEvents(){
        return $this->db->where('status',1)->order_by('id','desc')->limit(3)->get('events')->result();
    }

    public function getAllEvents($type){
        return $this->db->where('status',1)->where('type',$type)->order_by('id','desc')->get('events')->result();
    }

    public function getSignleEvent($id){
        return $this->db->where('status',1)->where('id',$id)->get('events')->row();
    }

    public function getSignleService($id){
        return $this->db->where('id',$id)->get('services')->row();
    }

    public function getSevas(){
        return $this->db->select('id, page')->where('type','sevas')->order_by('id','desc')->get('services')->result();
    }

    public function getVedic(){
        return $this->db->select('id, page')->where('type','vedic-rituals')->order_by('id','desc')->get('services')->result();
    }

    public function getLiterature(){
        return $this->db->order_by('id','desc')->get('literature')->result();
    }

    public function getVideo(){
        return $this->db->where('id',1)->get('video')->row();
    }

}
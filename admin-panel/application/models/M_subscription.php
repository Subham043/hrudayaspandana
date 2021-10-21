<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_subscription extends CI_Model {


    public function subscriptionGet($var = null)
    {
        $query =  $this->db->select('*')->order_by('id', 'desc')->get('subscribe')->result();    
        return $query;
    }

    public function subscriptionGetFilter($type = null)
    {
        $query =  $this->db->select('*')->where($type, 1)->order_by('id', 'desc')->get('subscribe')->result();    
        return $query;
    }

    public function getSubscription($id)
    {
        return  $this->db->where('id',$id)->get('subscribe')->row();
    }

    public function insertSubscription($data)
    {
        $this->db->insert('subscribe',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
    }

    public function updateSubscription($data, $id)
    {
        $this->db->where('id',$id);
		if($this->db->update('subscribe', $data)){
            return true;
        }else{
            return false;
        }
    }

    public function deleteSubscription($id){
        $this->db->where('id',$id);
		if($this->db->delete('subscribe')){
            return true;
        }else{
            return false;
        }
		
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
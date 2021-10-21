<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_registration extends CI_Model {


    public function registrationGet($var = null)
    {
        $query =  $this->db->where('verified >',0)->order_by('id', 'desc')->get('user')->result();    
        return $query;
    }

    public function getRegistration($id)
    {
        return  $this->db->where('id',$id)->get('user')->row();
    }

    public function updateRegistration($data,$id)
    {
        $this->db->where('id',$id);
		if($this->db->update('user', $data)){
            return true;
        }else{
            return false;
        }
    }

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contact extends CI_Model {



    public function contactGet($var = null)
    {
        $query =  $this->db->order_by('id', 'desc')->get('contact')->result();    
        return $query;
    }

    public function getContact($id)
    {
        return  $this->db->where('id',$id)->get('contact')->row();
    }

    

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
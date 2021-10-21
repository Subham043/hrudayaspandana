<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_volunteer extends CI_Model {



    public function volunteerGet($var = null)
    {
        $query =  $this->db->order_by('id', 'desc')->get('volunteer')->result();    
        return $query;
    }

    public function getVolunteer($id)
    {
        return  $this->db->where('id',$id)->get('volunteer')->row();
    }

    

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
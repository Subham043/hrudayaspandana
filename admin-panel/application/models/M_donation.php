<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_donation extends CI_Model {



    public function donationGet($type = null)
    {
        $query =  $this->db->where('trust',$type)->where('payment_status',1)->order_by('id', 'desc')->get('donation')->result();    
        return $query;
    }

    public function donationAmount($type = null)
    {
        $query =  $this->db->select_sum('amount')->where('trust',$type)->where('payment_status',1)->order_by('id', 'desc')->get('donation')->result();    
        return $query;
    }

    public function getDonation($id)
    {
        return  $this->db->where('id',$id)->get('donation')->row();
    }

    

}

/* End of file M_adminuser.php */
/* Location: ./application/models/M_adminuser.php */
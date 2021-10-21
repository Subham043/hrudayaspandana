<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_common extends CI_Model {

    public function paymentStatus($application_no)
    {
        $query=$this->db->select('status')->where('application_no', $application_no)->get('payments')->row();
        if(!empty($query)){
            if( $query->status==1){
                $status= '<p class="status  green"> Completed</p>';
            }elseif($query->status==0){
                $status= '<p class="status  yellow"> Pending</p>';
            }elseif($query->status==2){
                $status= '<p class="status  red"> Failed</p>';
            }
        }else{
            $status= '<p class="status  yellow"> Pending</p>';
        }
        return $status;
    }
}

/* End of file M_account.php */
/* Location: ./application/models/M_account.php */
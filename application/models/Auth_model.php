<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

    public function register($data)
	{
        $this->db->insert('user',$data);
        $insertId = $this->db->insert_id();
        if ($insertId) {
            return $insertId;
        }else{
            return false;
        }
	}

    public function checkId($id){
        $query = $this->db->where('id', $id)->get('user');
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function checkActive($id){
        $query = $this->db->where('id', $id)->where('verified', 1)->get('user');
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function checkChangePasswordActive($id){
        $query = $this->db->where('id', $id)->where('passwordChange', 1)->get('user');
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function verify($data,$id){
        $query = $this->db->where('id', $id)->where('otp', $data['otp'])->get('user');
        if($query->num_rows() > 0){
            $data = array(
                'verified'  => 1, 
                'otp' => random_int(100000, 999999), 
            );
            $this->db->where('id', $id);
            $this->db->update('user', $data);
            return true;
        }else{
            return false;
        }
    }

    public function changePassword($data,$id){
        $query = $this->db->where('id', $id)->where('otp', $data['otp'])->get('user');
        if($query->num_rows() > 0){
            $data['otp'] = random_int(100000, 999999);
            $data['passwordChange'] = 0;
            $this->db->where('id', $id);
            $this->db->update('user', $data);
            return true;
        }else{
            return false;
        }
    }

    public function checkEmail($data){
        $query = $this->db->where('email', $data['email'])->get('user');
        if($query->num_rows() > 0){
            $newdata = array( 
                'otp' => $data['otp'], 
                'passwordChange' => 1, 
            );
            $this->db->where('email', $data['email']);
            $this->db->update('user', $newdata);
            $query = $this->db->where('email', $data['email'])->get('user');
            return $query->row()->id;
        }else{
            return false;
        }
    }

    public function checkEmailLogin($data){
        $query = $this->db->where('email', $data['email'])->where('verified', 1)->get('user');
        if($query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getUserId($email){
        $query = $this->db->where('email', $email)->where('verified', 1)->get('user');
        return $query->row();
    }

    public function login($data){
        $query = $this->db->where('email', $data['email'])->where('verified', 1)->get('user');
        $result = $query->row_array();
		if ($this->bcrypt->check_password($data['password'], $result['password'])==true) {
			return true; 
        } else {
            return false;
        }
    }

    public function deleteUser($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('user');
		return true;
	}


}
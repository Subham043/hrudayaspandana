<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_registration');
        header_remove("X-Powered-By"); 
        header("X-Frame-Options: DENY");
        header("X-XSS-Protection: 1; mode=block");
        header("X-Content-Type-Options: nosniff");
        header("Strict-Transport-Security: max-age=31536000");
        header("Content-Security-Policy: frame-ancestors none");
        header("Referrer-Policy: no-referrer-when-downgrade");
        header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
        header("Pragma: no-cache"); //HTTP 1.0
    }

    //manage sub admin
    public function index($id = null)
    {
        $data['title']  = 'Registration - Hrudayaspandana';
        $data['result'] = $this->m_registration->registrationGet();
        $this->load->view('pages/registration/registration', $data);  
    }

    public function view($id='')
	{
        $data['title']  = 'Registration - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_registration->getRegistration($id);
            
           
            
            $this->load->view('pages/registration/view-registration', $data);  
		}else{
            return redirect('registration');
		}
    }

    public function status($id = '', $status='')
    {
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_registration->getRegistration($id);
        $data = array(
            'verified' => $status,
        );
        $application_id = $this->m_registration->updateRegistration($data,$id);
        if($application_id != false)
        {
            $this->session->set_flashdata('success','User Status Updated');
            redirect('registration');
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('registration');
        }
    }

    


  
}
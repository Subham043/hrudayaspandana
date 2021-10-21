<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Volunteer extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_volunteer');
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
        $data['title']  = 'Volunteer - Hrudayaspandana';
        $data['result'] = $this->m_volunteer->volunteerGet();
        $this->load->view('pages/volunteer/volunteer', $data);  
    }

    public function view($id='')
	{
        $data['title']  = 'Volunteer - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_volunteer->getVolunteer($id);
            
           
            
            $this->load->view('pages/volunteer/view-volunteer', $data);  
		}else{
            return redirect('volunteer');
		}
    }

    


  
}
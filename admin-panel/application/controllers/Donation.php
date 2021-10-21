<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_donation');
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
    public function index($type = '')
    {
        switch ($type) {
			case "sai-mayee-trust":
              $data['pagetype'] = "Sai Mayee Trust";
              $data['result'] = $this->m_donation->donationGet($data['pagetype']);
              $data['total_amount'] = $this->m_donation->donationAmount($data['pagetype']);
			  break;

			case "sri-sai-meru-mathi-trust":
                $data['pagetype']= "Sri Sai Meru Mathi Trust";
                $data['result'] = $this->m_donation->donationGet($data['pagetype']);
                $data['total_amount'] = $this->m_donation->donationAmount($data['pagetype']);
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['title']  = 'Donation - Hrudayaspandana';
        $this->load->view('pages/donation/donation', $data);  
    }

    public function view($id='')
	{
        $data['title']  = 'Donation - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_donation->getDonation($id);
            
           
            
            $this->load->view('pages/donation/view-donation', $data);  
		}else{
            return redirect('donation');
		}
    }

    


  
}
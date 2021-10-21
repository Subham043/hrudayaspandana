<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct() {
	
        parent::__construct();
        $this->load->model('home_model');
        $this->load->library('botdetect/BotDetectCaptcha', array(
            'captchaConfig' => 'Captcha'
        ));
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

    public function index()
	{
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA";
        $data['banner'] = $this->home_model->getBanner();
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['gallery'] = $this->home_model->getGallery();
        $data['video'] = $this->home_model->getVideo();
        $data['user'] = $this->home_model->getUserData($this->session->userdata('user_id'));
        $this->load->view('home/index', $data);
    }

    public function about()
	{
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - About Us";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['hero_heading'] = "About Us";
        $this->load->view('home/about', $data);
    }

    public function sai_meru_mathi()
	{
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - Sai Meru Mathi Trust";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['hero_heading'] = "Sai Meru Mathi Trust";
        $this->load->view('home/sai_meru_mathi', $data);
    }

    public function sai_mayee()
	{
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - Sai Mayee Trust";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['hero_heading'] = "Sai Mayee Trust";
        $this->load->view('home/sai_mayee', $data);
    }

    public function services($type='', $id='')
	{
        switch ($type) {
			case "sevas":
			  break;

			case "vedic-rituals":
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('404');
		}
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - Services";
        $data['hero_heading'] = "Services";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $id = $this->encrypt->decode($id);
        $data['services'] = $this->home_model->getSignleService($id);
        $data['gallery'] = $this->home_model->getSignleServiceGallery($id);
        $data['videos'] = $this->home_model->getSignleServiceGalleryVideo($id);
        $data['audios'] = $this->home_model->getSignleServiceGalleryAudio($id);
        if(empty($id)){
            $this->session->set_flashdata('error','Invalid Service ID.');
            redirect('/');
        }else if(empty($data['services'])){
            $this->session->set_flashdata('error','Invalid Service ID.');
            redirect('/');
        }else{
            $this->load->view('home/services', $data);
        }
    }

    public function events($type)
	{
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
              $data['hero_head_type'] = 'Manava Seva';
              $data['type'] = 'manava-seva';
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
                $data['hero_head_type'] = 'Madhava Seva';
                $data['type'] = 'madhava-seva';
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('404');
		}
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - Events";
        $data['events'] = $this->home_model->getAllEvents($type);
        $data['hero_heading'] = "Events";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $this->load->view('home/events', $data);
    }

    public function event_detail($type='',$id='')
	{
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
              $data['hero_head_type'] = 'Manava Seva';
              $data['type'] = 'manava-seva';
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
                $data['hero_head_type'] = 'Madhava Seva';
                $data['type'] = 'madhava-seva';
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('404');
		}
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - Event";
        $data['hero_heading'] = "Event";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $id = $this->encrypt->decode($id);
        $data['event'] = $this->home_model->getSignleEvent($id);
        if(empty($id)){
            $this->session->set_flashdata('error','Invalid Event ID.');
            redirect('events/'.$type);
        }else if(empty($data['event'])){
            $this->session->set_flashdata('error','Invalid Event ID.');
            redirect('events/'.$type);
        }else{
            $this->load->view('home/event', $data);
        }
        
    }

    public function donation()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric'); 
        $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
        $this->form_validation->set_rules('state', 'State', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
        $this->form_validation->set_rules('trust', 'Trust', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
		$this->form_validation->set_rules('check', 'Policy', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

        if($this->input->post('trust')=='Sai Mayee Trust'){
            $this->form_validation->set_rules('pan', 'PAN No.', 'trim|required|min_length[10]|max_length[10]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        }

		if($this->form_validation->run()) 
		{
            $fname 	= $this->input->post('fname');
            $lname 	= $this->input->post('lname');
            $phone 	= $this->input->post('phone');
            $email 	= $this->input->post('email');
            $city 	= $this->input->post('city');
            $state 	= $this->input->post('state');
            $trust 	= $this->input->post('trust');
            if($this->input->post('trust')=='Sai Mayee Trust'){
                $pan 	= $this->input->post('pan');
            }
            $amount 	= $this->input->post('amount');

            $data = array(
                'fname'  => $fname,  
                'lname'  => $lname,  
                'email' 		=> $email, 
                'phone' 		=> $phone, 
                'city' 		=> $city, 
                'state' 		=> $state, 
                'trust' 		=> $trust, 
                'amount' 		=> $amount, 
            );
            if($this->input->post('trust')=='Sai Mayee Trust'){
                $data['pan']=$pan;
            }
            if($this->session->userdata('user_id') != ''){
                $data['user_id']=$this->session->userdata('user_id');
            }
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->home_model->insertDonation($data);

            if($application_id != false)
            {
                redirect('payment/'.$this->encrypt->encode($application_id).'/donation');
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again.');
                redirect('donation');
            }
        }else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - Donation";
            $data['hero_heading'] = "Donation";
            $data['dynamic_sevas'] = $this->home_model->getSevas();
            $data['dynamic_vedic'] = $this->home_model->getVedic();
            $data['user'] = $this->home_model->getUserData($this->session->userdata('user_id'));
            $this->load->view('home/donation', $data);
        }
    }

    public function donation_ajax()
	{
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );

            $this->load->library('form_validation');
            $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
            $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric'); 
            $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
            $this->form_validation->set_rules('state', 'State', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
            $this->form_validation->set_rules('trust', 'Trust', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
            $this->form_validation->set_rules('check', 'Policy', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

            if($this->input->post('trust')=='Sai Mayee Trust'){
                $this->form_validation->set_rules('pan', 'PAN No.', 'trim|required|min_length[10]|max_length[10]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            }

            if($this->form_validation->run()) 
            {
                $fname 	= $this->input->post('fname');
                $lname 	= $this->input->post('lname');
                $phone 	= $this->input->post('phone');
                $email 	= $this->input->post('email');
                $city 	= $this->input->post('city');
                $state 	= $this->input->post('state');
                $trust 	= $this->input->post('trust');
                if($this->input->post('trust')=='Sai Mayee Trust'){
                    $pan 	= $this->input->post('pan');
                }
                $amount 	= $this->input->post('amount');

                $data = array(
                    'fname'  => $fname,  
                    'lname'  => $lname,  
                    'email' 		=> $email, 
                    'phone' 		=> $phone, 
                    'city' 		=> $city, 
                    'state' 		=> $state, 
                    'trust' 		=> $trust, 
                    'amount' 		=> $amount, 
                );
                if($this->input->post('trust')=='Sai Mayee Trust'){
                    $data['pan']=$pan;
                }
                if($this->session->userdata('user_id') != ''){
                    $data['user_id']=$this->session->userdata('user_id');
                }
                $data = html_escape($this->security->xss_clean($data));
                $application_id = $this->home_model->insertDonation($data);

                if($application_id != false)
                {
                    $json = array(
                        'status' => 'success',
                        'msg' => 'Data Stored',
                        'url' => 'payment/'.$this->encrypt->encode($application_id).'/donation'
                    );
                    
                }else{
                    $json = array(
                        'status' => 'error',
                        'msg' => 'Oops! Something went wrong. Please try again',
                        'url' => null
                    );
                }
                $this->botdetectcaptcha->Reset();
                echo json_encode($json);
            }else{
                $json = array(
                    'form_errors' => true,
                    'fname' => form_error('fname'),
                    'lname' => form_error('lname'),
                    'phone' => form_error('phone'),
                    'email' => form_error('email'),
                    'city' => form_error('city'),
                    'state' => form_error('state'),
                    'amount' => form_error('amount'),
                    'trust' => form_error('trust'),
                    'pan' => form_error('pan'),
                    'check' => form_error('check'),
                    'captcha' => form_error('captcha'),
                    'msg' => 'Please enter the valid input',
                );
                $this->botdetectcaptcha->Reset();
                echo json_encode($json);
            }
        }else{
            http_response_code(409);
            $this->botdetectcaptcha->Reset();
            echo  json_encode(array('status' => 'this method not allowed', 'msg' => 'Oops! Something went wrong. Please try again' ));
        }
    }

    public function hundi()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric'); 
        $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
        $this->form_validation->set_rules('state', 'State', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
        $this->form_validation->set_rules('trust', 'Trust', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
		$this->form_validation->set_rules('check', 'Policy', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

        if($this->input->post('trust')=='Sai Mayee Trust'){
            $this->form_validation->set_rules('pan', 'PAN No.', 'trim|required|min_length[10]|max_length[10]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        }

		if($this->form_validation->run()) 
		{
            $fname 	= $this->input->post('fname');
            $lname 	= $this->input->post('lname');
            $phone 	= $this->input->post('phone');
            $email 	= $this->input->post('email');
            $city 	= $this->input->post('city');
            $state 	= $this->input->post('state');
            $trust 	= $this->input->post('trust');
            if($this->input->post('trust')=='Sai Mayee Trust'){
                $pan 	= $this->input->post('pan');
            }
            $amount 	= $this->input->post('amount');

            $data = array(
                'fname'  => $fname,  
                'lname'  => $lname,  
                'email' 		=> $email, 
                'phone' 		=> $phone, 
                'city' 		=> $city, 
                'state' 		=> $state, 
                'trust' 		=> $trust, 
                'amount' 		=> $amount, 
            );
            if($this->input->post('trust')=='Sai Mayee Trust'){
                $data['pan']=$pan;
            }
            if($this->session->userdata('user_id') != ''){
                $data['user_id']=$this->session->userdata('user_id');
            }
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->home_model->insertHundi($data);

            if($application_id != false)
            {
                // redirect('payment/'.$this->encrypt->encode($application_id).'/e-hundi');
                $this->session->set_flashdata('success','Data stored. Kindly make the payment.');
                redirect('qr');
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again.');
                redirect('e-hundi');
            }
        }else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - e-Hundi";
            $data['hero_heading'] = "e-Hundi";
            $data['dynamic_sevas'] = $this->home_model->getSevas();
            $data['dynamic_vedic'] = $this->home_model->getVedic();
            $data['user'] = $this->home_model->getUserData($this->session->userdata('user_id'));
            $this->load->view('home/hundi', $data);
        }
    }

    public function payment($id,$type){
        $id=$this->encrypt->decode($id);
        if($type=='e-hundi'){
            $data['paymentDetails'] = $this->home_model->getHundi($id);
        }else{
            $data['paymentDetails'] = $this->home_model->getDonation($id);
        }
        
        if(empty($data['paymentDetails'])){
            $this->session->set_flashdata('error','Oops! trying to access invalid page.');
            return redirect('/');
        }else if($data['paymentDetails']->payment_status == 1){
            $this->session->set_flashdata('error','Oops! trying to access invalid page.');
            return redirect('/');
        }
        $data['key_id'] = 'rzp_test_SLkTFdH7HYtn58';
        $data['secret'] = 'fbMIkoFmVUFLV0rcxJcxNHfR';
        $data['title'] = "HRUDAYASPANDANA - Payment";
        $data['payment_update_link'] = $type."-payment/".$this->encrypt->encode($id);
        $this->load->view('home/payment', $data);
    }

    public function makeHundiPayment($id)
	{
        $id=$this->encrypt->decode($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $data= $this->input->post();
            $data = html_escape($this->security->xss_clean($data));
            $result = $this->home_model->updateHundiPayment($data, $id);
            
            if( $result){
                $json = array(
                    'status' => 'success',
                    'msg' => 'Payment Completed Successfully',
                );
            }else{
                $json = array(
                    'status' => 'error',
                    'msg' => 'Oops! Something went wrong. Please try again',
                );
            }
            echo json_encode($json);
        }
    }

    public function makeDonationPayment($id)
	{
        $id=$this->encrypt->decode($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $csrf = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
            );
            $data= $this->input->post();
            $data = html_escape($this->security->xss_clean($data));
            $result = $this->home_model->updateDonationPayment($data, $id);
            
            if( $result){
                $json = array(
                    'status' => 'success',
                    'msg' => 'Payment Completed Successfully',
                );
                $this->pdf($id);
            }else{
                $json = array(
                    'status' => 'error',
                    'msg' => 'Oops! Something went wrong. Please try again',
                );
            }
            echo json_encode($json);
        }
    }

    public function contact()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[6]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('check', 'Policy', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('trust', 'Trust', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

		if($this->form_validation->run()) 
		{
            $fname 	= $this->input->post('fname');
            $lname 	= $this->input->post('lname');
            $phone 	= $this->input->post('phone');
            $email 	= $this->input->post('email');
            $trust 	= $this->input->post('trust');
            $message 	= $this->input->post('message');

            $data = array(
                'fname'  => $fname,  
                'lname'  => $lname,  
                'email' 		=> $email, 
                'phone' 		=> $phone, 
                'trust' 		=> $trust, 
                'message' 		=> $message, 
            );
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->home_model->insertContact($data);

            if($application_id != false)
            {
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'mail.5ines.com',
                    'smtp_port' => 587,
                    'smtp_user' => 'testing@5ines.com',
                    'smtp_pass' => '5ine1234',
                    'mailtype'  => 'html', 
                    'charset'   => 'iso-8859-1'
                );
                $data['id'] = $this->encrypt->encode($application_id);
                $this->load->config('email');
                $this->load->library('email'); 
                $this->email->from('testing@5ines.com', 'HRUDAYASPANDANA'); 
                $this->email->to($data['email']);
                $this->email->subject('HRUDAYASPANDANA - Thank you for contacting us'); 
                
                $msg = $this->load->view('email/thankyou',$data,true);
                $this->email->message($msg);

                if($this->email->send())
                {
                    $this->sendContactAdmin($data);
                    $this->session->set_flashdata('success','Thank you for contacting us. We will get back to you as soon as possible.');
                    redirect('contact');
                }else{
                    $this->home_model->deleteContact($application_id);
                    $this->session->set_flashdata('error','Some error occured please try again.');
                    redirect('contact');
                }
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again');
                redirect('contact');
            }
        

		}
        else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - Contact Us";
            $data['hero_heading'] = "Contact Us";
            $data['dynamic_sevas'] = $this->home_model->getSevas();
            $data['dynamic_vedic'] = $this->home_model->getVedic();
            $data['user'] = $this->home_model->getUserData($this->session->userdata('user_id'));
            $this->load->view('home/contact', $data);
        }
    }

    public function literature()
	{
        $data['title'] = "HRUDAYASPANDANA - Literature";
        $data['hero_heading'] = "Literature";
        $data['literature'] = $this->home_model->getLiterature();
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $this->load->view('home/literature', $data);
    }

    public function gallery()
	{
        $data['title'] = "HRUDAYASPANDANA - Gallery";
        $data['hero_heading'] = "Gallery";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['gallery'] = $this->home_model->getAllGallery();
        $data['category'] = $this->home_model->getAllGalleryCategory();
        $category = $this->home_model->getAllGalleryCategory();
        $array=array();
        foreach ($category as $key => $value) { 
            array_push($array,$value->category);
        }
        $data['category_name'] = $array;
        $this->load->view('home/gallery', $data);
    }

    public function galleryVidoes()
	{
        $data['title'] = "HRUDAYASPANDANA - Gallery";
        $data['hero_heading'] = "Gallery";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['gallery'] = $this->home_model->getAllGalleryVideos();
        $data['category'] = $this->home_model->getAllGalleryVideosCategory();
        $category = $this->home_model->getAllGalleryVideosCategory();
        $array=array();
        foreach ($category as $key => $value) { 
            array_push($array,$value->category);
        }
        $data['category_name'] = $array;
        $this->load->view('home/gallery-videos', $data);
    }

    public function galleryAudios()
	{
        $data['title'] = "HRUDAYASPANDANA - Gallery";
        $data['hero_heading'] = "Gallery";
        $data['dynamic_sevas'] = $this->home_model->getSevas();
        $data['dynamic_vedic'] = $this->home_model->getVedic();
        $data['gallery'] = $this->home_model->getAllGalleryAudios();
        $data['category'] = $this->home_model->getAllGalleryAudiosCategory();
        $category = $this->home_model->getAllGalleryAudiosCategory();
        $array=array();
        foreach ($category as $key => $value) { 
            array_push($array,$value->category);
        }
        $data['category_name'] = $array;
        $this->load->view('home/gallery-audios', $data);
    }

    public function subscribe()
	{
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
       
        $this->security->xss_clean($_POST);
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[subscribe.email]|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('is_unique'=>'This email is already a subscriber','regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Mobile', 'trim|required|min_length[10]|max_length[10]|numeric');
        if(empty($this->input->post('ebook')) && empty($this->input->post('event')) && empty($this->input->post('newsletter')) && empty($this->input->post('blog'))){
            $this->form_validation->set_rules('ebook', 'E-book', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('required'=>'Please select atleast one subscription','regex_match' => 'Enter a valid subscription'));
        }
            if ($this->form_validation->run() == true) {

                $data= $this->input->post();
                if(!empty($this->input->post('ebook'))){
                    $data['ebook'] = 1;
                }
                if(!empty($this->input->post('event'))){
                    $data['event'] = 1;
                }
                if(!empty($this->input->post('newsletter'))){
                    $data['newsletter'] = 1;
                }
                if(!empty($this->input->post('blog'))){
                    $data['blog'] = 1;
                }
                if($this->session->userdata('user_id') != ''){
                    $data['user_id']=$this->session->userdata('user_id');
                }
                $result = $this->home_model->insertSubscriptionData($data);
            
                if( $result){
                    $json = array(
                        'status' => 'success',
                        'msg' => 'Subscription Completed Successfully',
                    );
                }else{
                    $json = array(
                        'status' => 'error',
                        'msg' => 'Oops! Something went wrong. Please try again',
                    );
                }
                echo json_encode($json);
            }else{ 
                $json = array(
                    'form_errors' => true,
                    'name' => form_error('name'),
                    'phone' => form_error('phone'),
                    'email' => form_error('email'),
                    'ebook' => form_error('ebook'),
                    'msg' => 'Please enter the valid input',
                );
                echo json_encode($json);
            }
        }else{
            http_response_code(409);
            echo  json_encode(array('status' => 'this method not allowed', 'msg' => 'Oops! Something went wrong. Please try again' ));
        }
    }

    public function volunteer()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|is_unique[volunteer.email]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('is_unique'=>'This email is already a volunteer','regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
		$this->form_validation->set_rules('aadhaar', 'Aadhaar', 'trim|required|min_length[12]|max_length[12]|numeric'); 
		$this->form_validation->set_rules('address', 'Address', 'trim|required|min_length[3]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('interest', 'Seva Interes', 'trim|required|min_length[3]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('check', 'Policy', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

        if($this->form_validation->run()) 
		{
            $fname 	= $this->input->post('fname');
            $lname 	= $this->input->post('lname');
            $phone 	= $this->input->post('phone');
            $aadhaar 	= $this->input->post('aadhaar');
            $email 	= $this->input->post('email');
            $address 	= $this->input->post('address');
            $interest 	= $this->input->post('interest');

            $data = array(
                'fname'  => $fname,  
                'lname'  => $lname,  
                'email' 		=> $email, 
                'phone' 		=> $phone, 
                'aadhaar' 		=> $aadhaar, 
                'address' 		=> $address, 
                'interest' 		=> $interest, 
            );
            if($this->session->userdata('user_id') != ''){
                $data['user_id']=$this->session->userdata('user_id');
            }
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->home_model->insertVolunteer($data);

            if($application_id != false)
            {
                $this->session->set_flashdata('success','Data Stored Successfully');
                redirect('volunteer');
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again');
                redirect('volunteer');
            }
        

		}
        else{

            $data['title'] = "HRUDAYASPANDANA - Volunteer";
            $data['hero_heading'] = "Volunteer";
            $data['dynamic_sevas'] = $this->home_model->getSevas();
            $data['dynamic_vedic'] = $this->home_model->getVedic();
            $data['user'] = $this->home_model->getUserData($this->session->userdata('user_id'));
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $this->load->view('home/volunteer', $data);
        }
    }

    public function pageNotFound()
	{
        $data['title'] = "HRUDAYASPANDANA - 404";
        $this->load->view('home/404', $data);
    }

    public function sendContactAdmin($data){
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.5ines.com',
			'smtp_port' => 587,
			'smtp_user' => 'testing@5ines.com',
			'smtp_pass' => '5ine1234',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$this->load->config('email');
		$this->load->library('email'); 
		$this->email->from('testing@5ines.com', 'Hrudayaspandana');
		$this->email->to('subham.5ine@gmail.com');
		$this->email->subject('Hrudayaspandana - New Enquiry'); 
		
		$msg = $this->load->view('email/admin-contact-email',$data,true);
		$this->email->message($msg);
		$this->email->send();

	}

    public function qr()
	{
        $data['title'] = "HRUDAYASPANDANA - E-Hundi";
        $this->load->view('home/qr', $data);
    }

    // public function pdf()
	// {
    //     $data['title'] = "HRUDAYASPANDANA - E-Hundi";
    //     $this->load->view('home/pdf', $data);
    // }

    public function pdf($id){

        $this->load->library('pdf');
   
        $path = base_url().'assets/images/round-logo.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $datanew = file_get_contents($path);
        $path = base_url().'assets/images/signature.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $datasign = file_get_contents($path);
        
        $data = array(
            'info' => $this->home_model->get_payment_info($id),
            'base_image' => 'data:image/' . $type . ';base64,' . base64_encode($datanew),
            'sign_image' => 'data:image/' . $type . ';base64,' . base64_encode($datasign),
        );
        
        $this->pdf->load_view('pdf/pdf', $data);
        $this->pdf->render();
        // $this->pdf->stream();
   
        
   
        
        $fileatt = $this->pdf->output();
   
       
        $filename = 'Payment.pdf';
        $encoding = 'base64';
        $type = 'application/pdf';
   
        $config = Array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.5ines.com',
            'smtp_port' => 587,
            'smtp_user' => 'testing@5ines.com',
            'smtp_pass' => '5ine1234',
            'mailtype'  => 'html', 
            'charset'   => 'iso-8859-1'
        );
        $this->load->config('email');
        $this->load->library('email'); 
        $this->email->from('testing@5ines.com', 'Hrudayaspandana'); 
        $this->email->to($data['info']->email);
        // $this->email->to('subham.5ine@gmail.com');
        $this->email->subject('Payment Successful'); 
        
        $msg = $this->load->view('email/payment',$data,true);
        $this->email->message($msg);
        $this->email->attach($fileatt,$filename,$encoding,$type);
   
        //Send mail 
        $this->email->send();
        // if($this->email->send()){
            
        //     $this->email->from('testing@5ines.com', 'APS'); 
        //     $this->email->to($userEmail);
        //     $this->email->to('subham.5ine@gmail.com');
        //     $this->email->subject('New Applicant'); 
            
        //     $msg = $this->load->view('email/admin-email-commerce',$data,true);
        //     $this->email->message($msg);
        //     $this->email->attach($fileatt,$filename,$encoding,$type);
        //     if($this->email->send()){
        //         $this->pdf->stream("application.pdf");
                
        //     }else{
        //        $this->session->set_flashdata('error','Some error occured please try again');
        //        redirect('home');
        //     }
        // }else{
        //    $this->session->set_flashdata('error','Some error occured please try again');
        //    redirect('home');
        // }
        
   
       }

    public function captcha_validate($code)
    {  
        // user considered human if they previously solved the Captcha...
        $isHuman = $this->botdetectcaptcha->IsSolved;
       
        if (!$isHuman) {
            // ...or if they solved the current Captcha
            $isHuman = $this->botdetectcaptcha->Validate($code);
           
        }
        // set error if Captcha validation failed
        if (!$isHuman) {
            $this->form_validation->set_message('captcha_validate', 'Please retype the characters from the image correctly.');
        }
        return $isHuman;
    }
}
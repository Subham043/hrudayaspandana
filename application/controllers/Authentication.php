<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

    function __construct() {
	
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library('form_validation');
        $this->load->library('bcrypt');
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
        if ($this->session->userdata('user_id') != '') {
            $this->session->set_flashdata('error','Oops.. unaccessible page!');
            redirect('/');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');
        if($this->form_validation->run()) 
		{
            $email 	= $this->input->post('email');
            $password 	= $this->input->post('password');

            $data = array( 
                'email' 		=> $email,  
                'password' 		=> $password,
            );
            $data = html_escape($this->security->xss_clean($data));
            if($this->auth_model->checkEmailLogin($data)){
                $application_id = $this->auth_model->login($data);
                if($application_id==true){
                    $user = $this->auth_model->getUserId($email);
                    $session_data = array('user_id' => $user->id);
                    $this->session->set_userdata($session_data);
                    $this->session->set_flashdata('success','logged in');
                    redirect('login');
                }else{
                    $this->session->set_flashdata('error','Invalid Password');
                    redirect('login');
                }
            }else{
                $this->session->set_flashdata('error','Invalid Email');
                redirect('login');
            }
            
        }else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - Login";
            $data['hero_heading'] = "Login";
            $this->load->view('auth/login', $data);
        }
        
        
    }

    public function register()
	{
        if ($this->session->userdata('user_id') != '') {
            $this->session->set_flashdata('error','Oops.. unaccessible page!');
            redirect('/');
        }

        $this->load->library('form_validation');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|is_unique[user.email]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('is_unique'=>'This email is already in use','regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('check', 'Policy', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

		if($this->form_validation->run()) 
		{
            $fname 	= $this->input->post('fname');
            $lname 	= $this->input->post('lname');
            $phone 	= $this->input->post('phone');
            $email 	= $this->input->post('email');
            $password 	= $this->input->post('password');

            $data = array(
                'fname'  => $fname,  
                'lname'  => $lname,  
                'email' 		=> $email, 
                'phone' 		=> $phone, 
                'password' 		=> $this->bcrypt->hash_password($password),
                'otp' => random_int(100000, 999999), 
            );
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->auth_model->register($data);

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
                $this->email->subject('HRUDAYASPANDANA - Email Verification'); 
                
                $msg = $this->load->view('email/otp',$data,true);
                $this->email->message($msg);

                if($this->email->send())
                {
                    $this->session->set_flashdata('success','Registered Successfully. Kindly check your email in order to verify your email and complete one last step of registration.');
                    redirect('otp/'.$data['id']);
                }else{
                    $this->auth_model->deleteUser($application_id);
                    $this->session->set_flashdata('error','Some error occured please try again.');
                    redirect('register');
                }
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again');
                redirect('register');
            }
        

		}
        else{
        $this->botdetectcaptcha->Reset();
        $data['captchaHtml'] = $this->botdetectcaptcha->Html();
        $data['title'] = "HRUDAYASPANDANA - Register";
        $data['hero_heading'] = "Register";
        $this->load->view('auth/register', $data);
        }
    }

    public function forgotPassword()
	{
        if ($this->session->userdata('user_id') != '') {
            $this->session->set_flashdata('error','Oops.. unaccessible page!');
            redirect('/');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

		if($this->form_validation->run()) 
		{
            $email 	= $this->input->post('email');

            $data = array(
                'email' 		=> $email,
                'otp' => random_int(100000, 999999),  
            );
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->auth_model->checkEmail($data);
            if($application_id!=false)
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
                $this->email->subject('HRUDAYASPANDANA - Reset Password'); 
                
                $msg = $this->load->view('email/forgot-password',$data,true);
                $this->email->message($msg);

                if($this->email->send())
                {
                    $this->session->set_flashdata('success','Kindly check your email in order to change your password.');
                    redirect('reset-password/'.$data['id']);
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again.');
                    redirect('forgot-password');
                }
            }else{
                $this->session->set_flashdata('error','Please enter the valid email');
                redirect('forgot-password');
            }
        }else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - Forgot Password";
            $data['hero_heading'] = "Forgot Password";
            $this->load->view('auth/forgot-password', $data);
        }
    }

    public function resetPassword($id)
	{
        if ($this->session->userdata('user_id') != '') {
            $this->session->set_flashdata('error','Oops.. unaccessible page!');
            redirect('/');
        }

        $user_id = $this->encrypt->decode($id);
        if($this->auth_model->checkChangePasswordActive($user_id)==false){
            $this->session->set_flashdata('error','Sorry you dont have the permission to access this page');
            redirect('404');
        }

        $this->form_validation->set_rules('otp', 'OTP', 'trim|required|min_length[6]|max_length[6]|numeric');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');

        if($this->form_validation->run()) 
		{
            $otp 	= $this->input->post('otp');
            $password 	= $this->input->post('password');

            $data = array(
                'otp' 		=> $otp, 
                'password' 		=> $this->bcrypt->hash_password($password), 
            );
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->auth_model->changePassword($data,$user_id);
            if($application_id!=false)
            {
                $this->session->set_flashdata('success','Password Reset Successful');
                redirect('login');
            }else{
                $this->session->set_flashdata('error','Please enter the valid OTP');
                redirect('reset-password/'.$id);
            }
        }else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - Reset Password";
            $data['hero_heading'] = "Reset Password";
            $data['id'] = $id;
            $this->load->view('auth/reset-password', $data);
        }
        
    }

    public function otp($id)
	{
        if ($this->session->userdata('user_id') != '') {
            $this->session->set_flashdata('error','Oops.. unaccessible page!');
            redirect('/');
        }

        $user_id = $this->encrypt->decode($id);
        if($this->auth_model->checkActive($user_id)==true){
            $this->session->set_flashdata('error','user is already active');
            redirect('404');
        }
        if($this->auth_model->checkId($user_id)==false){
            $this->session->set_flashdata('error','invalid reference id for otp');
            redirect('404');
        }

        $this->form_validation->set_rules('otp', 'OTP', 'trim|required|min_length[6]|max_length[6]|numeric');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_captcha_validate');
        if($this->form_validation->run()) 
		{
            $otp 	= $this->input->post('otp');
            $data = array(
                'otp' => $otp, 
            );
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->auth_model->verify($data, $user_id);
            if($application_id==true)
            {
                $this->session->set_flashdata('success','Registered Successfully.');
                redirect('/');
            }else{
                $this->session->set_flashdata('error','Please enter the valid OTP');
                redirect('otp/'.$id);
            }
        }else{
            $this->botdetectcaptcha->Reset();
            $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            $data['title'] = "HRUDAYASPANDANA - OTP";
            $data['hero_heading'] = "OTP";
            $data['id'] = $id;
            $this->load->view('auth/otp', $data);

        }
    }

    public function logout()
    {
        $session_data = array(
            'user_id' => $this->session->userdata('user_id'),
        );
        $this->session->unset_userdata($session_data);
        $this->session->sess_destroy();
        $this->session->set_flashdata('success', 'You are logged out Successfully');
        redirect('/');
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
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hundi extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_hundi');
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
        $data['title']  = 'E-Hundi - Hrudayaspandana';
        $data['result'] = $this->m_hundi->hundiGet();
        $this->load->view('pages/hundi/hundi', $data);  
    }

    public function add($id = null)
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
                $data = html_escape($this->security->xss_clean($data));
                $application_id = $this->m_hundi->insertHundi($data);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','E-Hundi Stored');
                    redirect('e-hundi');
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('e-hundi/add');
                }
        }else{
            $data['title']  = 'E-Hundi - Hrudayaspandana';
            $this->load->view('pages/hundi/add', $data);
        }    
    }

    public function view($id='')
	{
        $data['title']  = 'E-Hundi - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_hundi->getHundi($id);
            
           
            
            $this->load->view('pages/hundi/view-hundi', $data);  
		}else{
            return redirect('e-hundi');
		}
    }

    public function edit($id = '')
    {
        $data['title']  = 'E-Hundi - Hrudayaspandana';
        $id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_hundi->getHundi($id);

        if(!empty($id) || !empty($data['result'])){
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
            $this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('phone', 'Phone Number', 'trim|required|min_length[10]|max_length[10]|numeric'); 
            $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric'); 
            $this->form_validation->set_rules('city', 'City', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
            $this->form_validation->set_rules('state', 'State', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
            $this->form_validation->set_rules('trust', 'Trust', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces'));
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
                $data = html_escape($this->security->xss_clean($data));
                $application_id = $this->m_hundi->updateHundi($data, $id);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','E-Hundi Updated');
                    redirect('e-hundi');
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('e-hundi/edit/'.$this->encryption_url->safe_b64encode($id));
                }

            }else{
                $this->load->view('pages/hundi/edit', $data); 
            }
             
		}else{
            $this->session->set_flashdata('error','Invalid E-Hundi ID');
            return redirect('dashboard');
		}
    }

    public function delete($id = '')
    {
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_hundi->getHundi($id);
        $application_id = $this->m_hundi->deleteHundi($id);
        if($application_id != false)
        {
            $this->session->set_flashdata('success','E-Hundi Deleted');
            redirect('e-hundi');
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('e-hundi');
        }
    }

    


  
}
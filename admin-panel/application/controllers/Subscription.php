<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_subscription');
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
        $filter = $this->input->get('filter');
        if(!empty($filter)){
            switch ($filter) {
                case "ebook":
                    $data['result'] = $this->m_subscription->subscriptionGetFilter($filter);
                  break;
    
                case "event":
                    $data['result'] = $this->m_subscription->subscriptionGetFilter($filter);
                    break;
                case "newsletter":
                    $data['result'] = $this->m_subscription->subscriptionGetFilter($filter);
                    break;
                case "blog":
                    $data['result'] = $this->m_subscription->subscriptionGetFilter($filter);
                    break;
                
                default:
                    $this->session->set_flashdata('error','Invalid Filter');
                    redirect('dashboard');
            }
        }else{
            $data['result'] = $this->m_subscription->subscriptionGet();
        }
        $data['title']  = 'Subscription - Hrudayaspandana';
        $this->load->view('pages/subscribe/subscription', $data);  
    }

    public function view($id='')
	{
        $data['title']  = 'Subscription - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_subscription->getSubscription($id);
            
           
            
            $this->load->view('pages/subscribe/view-subscription', $data);  
		}else{
            return redirect('registration');
		}
    }

    public function add($id = null)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
		$this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
		$this->form_validation->set_rules('phone', 'Mobile', 'trim|required|min_length[10]|max_length[10]|numeric');
        if(empty($this->input->post('ebook')) && empty($this->input->post('event')) && empty($this->input->post('newsletter')) && empty($this->input->post('blog'))){
            $this->form_validation->set_rules('ebook', 'Category', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('required'=>'Please select atleast one subscription','regex_match' => 'Enter a valid subscription'));
        }
        
        if($this->form_validation->run()) 
		{

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
            $data = html_escape($this->security->xss_clean($data));
            $application_id = $this->m_subscription->insertSubscription($data);
            if($application_id != false)
            {
                $this->session->set_flashdata('success','Subscription Stored');
                redirect('subscription');
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again');
                redirect('subscription/add');
            }
        }else{
            $data['title']  = 'Subscription - Hrudayaspandana';
            $this->load->view('pages/subscribe/add', $data);
        }    
    }

    public function edit($id = '')
    {
        $data['title']  = 'Subscription - Hrudayaspandana';
        $id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_subscription->getSubscription($id);

        if(!empty($id) || !empty($data['result'])){
            
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[2]|max_length[200]|regex_match[/^[a-zA-Z][a-zA-Z ]*$/]', array('regex_match' => 'The %s field can only contain letters and spaces')); 
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[10]|max_length[200]|regex_match[/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('phone', 'Mobile', 'trim|required|min_length[10]|max_length[10]|numeric');
            if(empty($this->input->post('ebook')) && empty($this->input->post('event')) && empty($this->input->post('newsletter')) && empty($this->input->post('blog'))){
                $this->form_validation->set_rules('ebook', 'Category', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('required'=>'Please select atleast one subscription','regex_match' => 'Enter a valid subscription'));
            }

            if($this->form_validation->run()) 
		    {

                $data= $this->input->post();
                if(!empty($this->input->post('ebook'))){
                    $data['ebook'] = 1;
                }else{
                    $data['ebook'] = 0;
                }
                if(!empty($this->input->post('event'))){
                    $data['event'] = 1;
                }else{
                    $data['event'] = 0;
                }
                if(!empty($this->input->post('newsletter'))){
                    $data['newsletter'] = 1;
                }else{
                    $data['newsletter'] = 0;
                }
                if(!empty($this->input->post('blog'))){
                    $data['blog'] = 1;
                }else{
                    $data['blog'] = 0;
                }
                $data = html_escape($this->security->xss_clean($data));
                $application_id = $this->m_subscription->updateSubscription($data, $id);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','Subscription Updated');
                    redirect('subscription');
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('subscription/edit/'.$this->encryption_url->safe_b64encode($id));
                }

            }else{
                $this->load->view('pages/subscribe/edit', $data); 
            }
             
		}else{
            $this->session->set_flashdata('error','Invalid Subscription ID');
            return redirect('dashboard');
		}
    }

    public function delete($id = '')
    {
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_subscription->getSubscription($id);
        $application_id = $this->m_subscription->deleteSubscription($id);
        if($application_id != false)
        {
            $this->session->set_flashdata('success','Subscription Deleted');
            redirect('subscription');
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('subscription');
        }
    }

    


  
}
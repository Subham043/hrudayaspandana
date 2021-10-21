<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_events');
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

    public function index($type = null)
    {
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['title']  = 'Events - Hrudayaspandana';
        $data['type']  = $type;
        $data['result'] = $this->m_events->eventGet($type);
        $this->load->view('pages/events/events', $data);  
    }

    public function view($id='', $type='')
	{
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['title']  = 'Events - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_events->getEvent($id);
            
           
            
            $this->load->view('pages/events/view-events', $data);  
		}else{
            return redirect('events/'.$type);
		}
    }

    public function add($type = null)
    {
        
        $config['upload_path']          = '../assets/images/events';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

        $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('sdate', 'Start Date', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('edate', 'End Date', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('stime', 'Start Time', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('etime', 'End Time', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('description1', 'Description', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('type', 'Type', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        if(!empty($this->input->post('description2'))){
            $this->form_validation->set_rules('description2', 'Description', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        }
        if(!empty($this->input->post('description3'))){
            $this->form_validation->set_rules('description3', 'Description', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        }
        
        if($this->form_validation->run()) 
		{

            if ( ! $this->upload->do_upload('image'))
            {
                $this->session->set_flashdata('error',$this->upload->display_errors());
                $data['title']  = 'Events - Hrudayaspandana';
                $this->load->view('pages/events/add', $data);
            }
            else
            { 
                $image = $this->upload->data('file_name'); 
                $name 	= $this->input->post('name');
                $sdate 	= $this->input->post('sdate'); 
                $edate 	= $this->input->post('edate'); 
                $stime 	= $this->input->post('stime'); 
                $etime 	= $this->input->post('etime');
                $description1 	= $this->input->post('description1');
                $type 	= $this->input->post('type');
                $newdata = array(
                    'image'  => $image, 
                    'name'  => $name, 
                    'sdate'  => $sdate, 
                    'edate'  => $edate, 
                    'stime'  => $stime, 
                    'etime'  => $etime, 
                    'description1'  => $description1, 
                    'type'  => $type, 
                );
                if(!empty($this->input->post('description2'))){
                    $newdata['description2'] = $this->input->post('description2');
                }
                if(!empty($this->input->post('description3'))){
                    $newdata['description3'] = $this->input->post('description3');
                }
                $application_id = $this->m_events->insertEvents($newdata);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','Event Stored');
                    redirect('events/'.$type);
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('events/new/add');
                }
            }
        }else{
            $data['title']  = 'Events - Hrudayaspandana';
            $this->load->view('pages/events/add', $data);
        }  
    }

    public function delete($id = '', $type = '')
    {
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_events->getEvent($id);
        $application_id = $this->m_events->deleteEvent($id);
        if($application_id != false)
        {
            $path = '../assets/images/events/'.$imageResult->image;
            unlink($path);
            $this->session->set_flashdata('success','Event Deleted');
            redirect('events/'.$type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('events/'.$type);
        }
    }

    public function status($id = '', $status='', $type = '')
    {
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_events->getEvent($id);
        $data = array(
            'status' => $status,
        );
        $application_id = $this->m_events->updateEvent($data,$id);
        if($application_id != false)
        {
            $this->session->set_flashdata('success','Event Status Updated');
            redirect('events/'.$type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('events/'.$type);
        }
    }

    public function edit($id = '')
    {
        $config['upload_path']          = '../assets/images/events';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

        $data['title']  = 'Events - Hrudayaspandana';
        $id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_events->getEvent($id);

        if(!empty($id) || !empty($data['result'])){
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('sdate', 'Start Date', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('edate', 'End Date', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('stime', 'Start Time', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('etime', 'End Time', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('description1', 'Description', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('status', 'Status', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('type', 'Type', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            if(!empty($this->input->post('description2'))){
                $this->form_validation->set_rules('description2', 'Description', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            }
            if(!empty($this->input->post('description3'))){
                $this->form_validation->set_rules('description3', 'Description', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            }

            if($this->form_validation->run()) 
		    {

                if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])){

                    if ( ! $this->upload->do_upload('image'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        $data['title']  = 'Events - Hrudayaspandana';
                        $this->load->view('pages/events/edit', $data);
                    }
                    else
                    { 
                        $path = '../assets/images/events/'.$data['result']->image;
                        unlink($path);
                        $image = $this->upload->data('file_name'); 
                        $name 	= $this->input->post('name');
                        $sdate 	= $this->input->post('sdate'); 
                        $edate 	= $this->input->post('edate'); 
                        $stime 	= $this->input->post('stime'); 
                        $etime 	= $this->input->post('etime');
                        $description1 	= $this->input->post('description1');
                        $status 	= $this->input->post('status');
                        $type 	= $this->input->post('type');
                        $newdata = array(
                            'image'  => $image, 
                            'name'  => $name, 
                            'sdate'  => $sdate, 
                            'edate'  => $edate, 
                            'stime'  => $stime, 
                            'etime'  => $etime, 
                            'description1'  => $description1, 
                            'status'  => $status, 
                            'type'  => $type, 
                        );
                        if(!empty($this->input->post('description2'))){
                            $newdata['description2'] = $this->input->post('description2');
                        }
                        if(!empty($this->input->post('description3'))){
                            $newdata['description3'] = $this->input->post('description3');
                        }
                        $application_id = $this->m_events->updateEvent($newdata, $id);
                        if($application_id != false)
                        {
                            $this->session->set_flashdata('success','Event Updated');
                            redirect('events/'.$type);
                            
                        }else{
                            $this->session->set_flashdata('error','Some error occured please try again');
                            redirect('events/edit/'.$this->encryption_url->safe_b64encode($id));
                        }
                    }


                }else{

                    $name 	= $this->input->post('name');
                    $sdate 	= $this->input->post('sdate'); 
                    $edate 	= $this->input->post('edate'); 
                    $stime 	= $this->input->post('stime'); 
                    $etime 	= $this->input->post('etime');
                    $description1 	= $this->input->post('description1');
                    $status 	= $this->input->post('status');
                    $type 	= $this->input->post('type');
                    $newdata = array(
                        'name'  => $name, 
                        'sdate'  => $sdate, 
                        'edate'  => $edate, 
                        'stime'  => $stime, 
                        'etime'  => $etime, 
                        'description1'  => $description1, 
                        'status'  => $status, 
                        'type'  => $type, 
                    );
                    if(!empty($this->input->post('description2'))){
                        $newdata['description2'] = $this->input->post('description2');
                    }
                    if(!empty($this->input->post('description3'))){
                        $newdata['description3'] = $this->input->post('description3');
                    }
                    $application_id = $this->m_events->updateEvent($newdata, $id);
                    if($application_id != false)
                    {
                        $this->session->set_flashdata('success','Event Updated');
                        redirect('events/'.$type);
                        
                    }else{
                        $this->session->set_flashdata('error','Some error occured please try again');
                        redirect('events/edit/'.$this->encryption_url->safe_b64encode($id));
                    }

                }


            }else{
                $this->load->view('pages/events/edit', $data);
            }
             
		}else{
            $this->session->set_flashdata('error','Invalid Event ID');
            return redirect('dashboard');
		}
    }

    


  
}
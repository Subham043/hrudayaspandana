<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Literature extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_literature');
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

    public function index($id = null)
    {
        $data['title']  = 'Literature - Hrudayaspandana';
        $data['result'] = $this->m_literature->literatureGet();
        $this->load->view('pages/literature/literature', $data);  
    }

    public function view($id='')
	{
        $data['title']  = 'Literature - Hrudayaspandana';
		if(!empty($id)){
            $id = $this->encryption_url->safe_b64decode($id);
            $data['result']= $this->m_literature->getLiterature($id);
            
           
            
            $this->load->view('pages/literature/view-literature', $data);  
		}else{
            return redirect('literature');
		}
    }

    public function add()
	{
        $this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[200]|regex_match[/^[a-z 0-9~%.:_\@\'\"\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s')); 
		$this->form_validation->set_rules('category', 'Innovation Category', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        if($this->input->post('category')=='Link'){
            $this->form_validation->set_rules('link', 'Link', 'trim|required|min_length[3]|max_length[200]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s')); 
        }
		if($this->form_validation->run()) 
		{
            $config['upload_path']          = '../assets/images/literature';
            $config['allowed_types']        = 'jpg|png|jpeg|pdf';                
            $config['max_width']            = 0;
            $config['encrypt_name']         = TRUE;
            $this->load->library('upload', $config);
            if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
            $error_count = 0;
            $error_image = false;
            $error_pdf = false;

            if ( ! $this->upload->do_upload('image'))
            {
                $error_count++;
                $this->session->set_flashdata('error',$this->upload->display_errors());
                $error_image = true;
            }else{
                $image = $this->upload->data('file_name');
            }

            if($this->input->post('category')=='PDF'){
                if ( ! $this->upload->do_upload('pdf'))
                {
                    $error_count++;
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                    $error_pdf = true;
                }else{
                    $pdf = $this->upload->data('file_name');
                }
            }
            
            if ( $error_count == 0) {
            
                $name 	= $this->input->post('name');
                $category 	= $this->input->post('category');

                $data = array(
                    'name'  => $name, 
                    'category' 		=> $category, 
                    'image' => $image,  
                );
                if($this->input->post('category')=='PDF'){
                    $data['pdf'] = $pdf;
                }else{
                    $data['link'] = $this->input->post('link');
                }
                $data = html_escape($this->security->xss_clean($data));
                $application_id = $this->m_literature->insertLiterature($data);

                if($application_id != false)
				{
                    $this->session->set_flashdata('success','Literature Added Successfully.');
                    redirect('literature');
                    
                }else{
                    $path ='../assets/images/literature/'.$pdf;
                    unlink($path);
                    $path ='../assets/images/literature/'.$image;
                    unlink($path);
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('literature/add');
                }
            }else{
                
                if($this->input->post('category')=='PDF'){
                    if($error_image==true && $error_pdf==false){
                        $path ='../assets/images/literature/'.$pdf;
                        unlink($path);
                    } 
                }
                if($error_image==false && $error_pdf==true){
                    $path ='../assets/images/literature/'.$image;
                    unlink($path);
                }
                $data['title']  = 'Literature - Hrudayaspandana';
                $this->load->view('pages/literature/add', $data);
            }
        }else{
            $data['title']  = 'Literature - Hrudayaspandana';
            $this->load->view('pages/literature/add', $data);
        }
    }

    public function delete($id = '')
    {
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_literature->getLiteratureImage($id);
        $application_id = $this->m_literature->deleteLiteratureImage($id);
        if($application_id != false)
        {
            $path = '../assets/images/literature/'.$imageResult->image;
            unlink($path);
            if($imageResult->category=='PDF'){
                $path = '../assets/images/literature/'.$imageResult->pdf;
                unlink($path);
            }
            $this->session->set_flashdata('success','Literature Deleted');
            redirect('literature');
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('literature');
        }
    }

    public function edit($id = '')
    {
        $config['upload_path']          = '../assets/images/literature';
        $config['allowed_types']        = 'jpg|png|jpeg|pdf';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

        $data['title']  = 'Literature - Hrudayaspandana';
        $id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_literature->getLiterature($id);

        if(!empty($id) || !empty($data['result'])){
            
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[200]|regex_match[/^[a-z 0-9~%.:_\@\'\"\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s')); 
            $this->form_validation->set_rules('category', 'Innovation Category', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            if($this->input->post('category')=='Link'){
                $this->form_validation->set_rules('link', 'Link', 'trim|required|min_length[3]|max_length[200]|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s')); 
            }

            if($this->form_validation->run()) 
		    {

                if(isset($_FILES["image"]["name"]) && !empty($_FILES["image"]["name"])){

                    if ( ! $this->upload->do_upload('image'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        $data['title']  = 'Literature - Hrudayaspandana';
                        $this->load->view('pages/literature/edit', $data);
                    }
                    else
                    { 
                        $path = '../assets/images/literature/'.$data['result']->image;
                        unlink($path);
                        $image = $this->upload->data('file_name');
                        $newdata = array(
                            'image'  => $image, 
                        );
                        $application_id = $this->m_literature->updateLiterature($newdata, $id);
                        if($application_id == false)
                        {
                            $this->session->set_flashdata('error','Some error occured please try again');
                            redirect('events/edit/'.$this->encryption_url->safe_b64encode($id));
                        }
                    }


                }

                if(isset($_FILES["pdf"]["name"]) && !empty($_FILES["pdf"]["name"]) && $this->input->post('category')=='PDF'){

                    if ( ! $this->upload->do_upload('pdf'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        $data['title']  = 'Literature - Hrudayaspandana';
                        $this->load->view('pages/literature/edit', $data);
                    }
                    else
                    { 
                        if($data['result']->category=="PDF"){
                            $path = '../assets/images/literature/'.$data['result']->pdf;
                            unlink($path);
                        }
                        $pdf = $this->upload->data('file_name');
                        $newdata = array(
                            'pdf'  => $pdf, 
                        );
                        $application_id = $this->m_literature->updateLiterature($newdata, $id);
                        if($application_id == false)
                        {
                            $this->session->set_flashdata('error','Some error occured please try again');
                            redirect('events/edit/'.$this->encryption_url->safe_b64encode($id));
                        }
                    }


                }

                $name 	= $this->input->post('name');
                $category 	= $this->input->post('category');

                $newdata = array(
                    'name'  => $name, 
                    'category' 		=> $category,  
                );
                if($this->input->post('category')=='Link'){
                    $newdata['link'] = $this->input->post('link');
                    if($data['result']->category=="PDF"){
                        $path = '../assets/images/literature/'.$data['result']->pdf;
                        unlink($path);
                        $newdata['pdf'] = null;
                    }
                }else{
                    $newdata['link'] = null;
                }
                $application_id = $this->m_literature->updateLiterature($newdata, $id);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','Literature Updated');
                    redirect('literature');
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('literature/edit/'.$this->encryption_url->safe_b64encode($id));
                }


            }else{
                $this->load->view('pages/literature/edit', $data);
            }
             
		}else{
            $this->session->set_flashdata('error','Invalid Literature ID');
            return redirect('dashboard');
		}
    }

    


  
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_services');
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
			case "madhava-seva":
              $type= "madhava-seva";
			  break;

			case "manava-seva":
              $type= "manava-seva";
			  break;

			case "vedic-rituals":
                $type= "vedic-rituals";
				break;

			case "activities":
                $type= "activities";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['title']  = 'Services - Hrudayaspandana';
        $data['type']  = $type;
        $data['result'] = $this->m_services->serviceGet($type);
        $this->load->view('pages/services/services', $data);  
    }

    public function view($id='', $type='')
	{
        $data['title']  = 'Services - Hrudayaspandana';
        switch ($type) {
			case "madhava-seva":
                $type= "madhava-seva";
                break;

            case "manava-seva":
                $type= "manava-seva";
                break;

            case "vedic-rituals":
                $type= "vedic-rituals";
                break;

            case "activities":
                $type= "activities";
                break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
		$id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_services->getService($id);
		if(!empty($id) && !empty($data['result'])){
            
           
            
            $this->load->view('pages/services/view-services', $data);  
		}else{
            return redirect('services/'.$type);
		}
    }

    public function add($type = null)
    {
        
        $config['upload_path']          = '../assets/images/services';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

        $error_count = 0;
        $error_image1 = false;
        $error_image2 = false;

        $this->form_validation->set_rules('page', 'Page Name', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('title1', 'Title', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('heading1', 'Heading', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        $this->form_validation->set_rules('description1', 'Description', 'trim|required');
        $this->form_validation->set_rules('type', 'Type', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        if(!empty($this->input->post('description2'))){
            $this->form_validation->set_rules('description2', 'Description', 'trim|required');
        }
        if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){
            $this->form_validation->set_rules('title2', 'Title', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('heading2', 'Heading', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('description3', 'Description', 'trim|required');
        }
        if(!empty($this->input->post('description4'))){
            $this->form_validation->set_rules('description4', 'Description', 'trim|required');
        }
        
        if($this->form_validation->run()) 
		{

            if ( ! $this->upload->do_upload('image1'))
            {
                $error_count++;
                $this->session->set_flashdata('error',$this->upload->display_errors());
                $error_image1 = true;
            }else{
                $image1 = $this->upload->data('file_name');
            }
            
            if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){
                if ( ! $this->upload->do_upload('image2'))
                {
                    $error_count++;
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                    $error_image2 = true;
                }else{
                    $image2 = $this->upload->data('file_name');
                }
            }
            

            if ( $error_count == 0) {

                $page 	= $this->input->post('page');
                $title1 	= $this->input->post('title1');
                $title2 	= $this->input->post('title2');
                $heading1 	= $this->input->post('heading1'); 
                $heading2 	= $this->input->post('heading2'); 
                $description1 	= $this->input->post('description1');
                $description3 	= $this->input->post('description3');
                $type 	= $this->input->post('type');
                $newdata = array(
                    'image1'  => $image1, 
                    'page'  => $page, 
                    'title1'  => $title1, 
                    'heading1'  => $heading1, 
                    'description1'  => $description1,  
                    'type'  => $type, 
                );
                if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){
                    $newdata['title2'] =  $title2;
                    $newdata['heading2'] =  $heading2;
                    $newdata['description3'] =  $description3;
                    $newdata['image2'] =  $image2;
                }
                if(!empty($this->input->post('description2'))){
                    $newdata['description2'] = $this->input->post('description2');
                }
                if(!empty($this->input->post('description4'))){
                    $newdata['description4'] = $this->input->post('description4');
                }
                $application_id = $this->m_services->insertServices($newdata);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','Serice Stored');
                    redirect('services/'.$type);
                    
                }else{
                    $path ='../assets/images/services/'.$image1;
                    unlink($path);
                    if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){
                        $path ='../assets/images/services/'.$image2;
                        unlink($path);
                    }
                    $this->session->set_flashdata('error','Some error occured please try again');
                    $data['title']  = 'Services - Hrudayaspandana';
                    $this->load->view('pages/services/add', $data);
                }
            }else{
                if($error_image1==true && $error_image2==false){
                    $path ='../assets/images/services/'.$image2;
                    unlink($path);
                }else if($error_image1==false && $error_image2==true){
                    $path ='../assets/images/services/'.$image1;
                    unlink($path);
                }
                $data['title']  = 'Services - Hrudayaspandana';
                $this->load->view('pages/services/add', $data);
            }
        }else{
            $data['title']  = 'Services - Hrudayaspandana';
            $this->load->view('pages/services/add', $data);
        }  
    }

    public function delete($id = '', $type = '')
    {
        switch ($type) {
			case "madhava-seva":
                $type= "madhava-seva";
                break;
  
              case "manava-seva":
                $type= "manava-seva";
                break;
  
              case "vedic-rituals":
                  $type= "vedic-rituals";
                  break;
  
              case "activities":
                  $type= "activities";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_services->getService($id);
        $serviceGallery = $this->m_services->serviceGetById($id);
        $application_id = $this->m_services->deleteService($id);
        if($application_id != false)
        {
            $path = '../assets/images/services/'.$imageResult->image1;
            unlink($path);
            if($imageResult->image2!=null){
                $path = '../assets/images/services/'.$imageResult->image2;
                unlink($path);
            }
            if (!empty($serviceGallery)) {
              foreach ($serviceGallery as $key => $value) {
                $path = '../assets/images/home/gallery/'.$value->image;
                unlink($path);
              }
            }
            $this->m_services->deleteHomeGalleryImage($id);
            $this->m_services->deleteHomeGalleryVideo($id);
            $this->session->set_flashdata('success','Service Deleted');
            redirect('services/'.$type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('services/'.$type);
        }
    }

    public function edit($id = '')
    {
        $config['upload_path']          = '../assets/images/services';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

        $data['title']  = 'Services - Hrudayaspandana';
        $id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_services->getService($id);

        if(!empty($id) || !empty($data['result'])){
            
            $this->form_validation->set_rules('page', 'Page Name', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('title1', 'Title', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('heading1', 'Heading', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            $this->form_validation->set_rules('description1', 'Description', 'trim|required');
            $this->form_validation->set_rules('type', 'Type', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\<\>\=\#\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            if(!empty($this->input->post('description2'))){
                $this->form_validation->set_rules('description2', 'Description', 'trim|required');
            }
            if(!empty($this->input->post('description4'))){
                $this->form_validation->set_rules('description4', 'Description', 'trim|required');
            }
            if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){
                $this->form_validation->set_rules('title2', 'Title', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
                $this->form_validation->set_rules('heading2', 'Heading', 'trim|required|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
                $this->form_validation->set_rules('description3', 'Description', 'trim|required');
            }

            if($this->form_validation->run()) 
		    {
                if(isset($_FILES["image1"]["name"]) && !empty($_FILES["image1"]["name"])){

                    if ( ! $this->upload->do_upload('image1'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        $data['title']  = 'Services - Hrudayaspandana';
                        $this->load->view('pages/services/edit', $data);
                    }
                    else
                    { 
                        
                        $path = '../assets/images/services/'.$data['result']->image1;
                        // echo $path;exit;
                        unlink($path);
                        $image1 = $this->upload->data('file_name'); 
                        $newdata = array(
                            'image1'  => $image1, 
                        );

                        $application_id = $this->m_services->updateService($newdata, $id);
                        if($application_id == false)
                        {
                            $this->session->set_flashdata('error','Some error occured please try again');
                            redirect('services/edit/'.$this->encryption_url->safe_b64encode($id));
                            
                        }
                    }


                }

                if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){

                    if(isset($_FILES["image2"]["name"]) && !empty($_FILES["image2"]["name"])){

                        if ( ! $this->upload->do_upload('image2'))
                        {
                            $this->session->set_flashdata('error',$this->upload->display_errors());
                            $data['title']  = 'Services - Hrudayaspandana';
                            $this->load->view('pages/services/edit', $data);
                        }
                        else
                        {
                                if($data['result']->image2!=null){
                                    $path = '../assets/images/services/'.$data['result']->image2;
                                    unlink($path);
                                }
                                
                                $image2 = $this->upload->data('file_name'); 
                                $newdata = array(
                                    'image2'  => $image2, 
                                );
    
                                $application_id = $this->m_services->updateService($newdata, $id);
                                if($application_id == false)
                                {
                                    $this->session->set_flashdata('error','Some error occured please try again');
                                    redirect('services/edit/'.$this->encryption_url->safe_b64encode($id));
                                    
                                }
                            
                        }
    
    
                    }

                }else{
                    if($data['result']->image2!=null){
                        $path = '../assets/images/services/'.$data['result']->image2;
                        unlink($path);
                    }
                    
                    $image2 = null;
                    $newdata = array(
                        'image2'  => $image2, 
                    );

                    $application_id = $this->m_services->updateService($newdata, $id);
                    if($application_id == false)
                    {
                        $this->session->set_flashdata('error','Some error occured please try again');
                        redirect('services/edit/'.$this->encryption_url->safe_b64encode($id));
                        
                    }
                }
                

                $page 	= $this->input->post('page');
                $title1 	= $this->input->post('title1');
                $title2 	= $this->input->post('title2');
                $heading1 	= $this->input->post('heading1'); 
                $heading2 	= $this->input->post('heading2'); 
                $description1 	= $this->input->post('description1');
                $description3 	= $this->input->post('description3');
                $type 	= $this->input->post('type');
                $newdata = array(
                    'page'  => $page, 
                    'title1'  => $title1, 
                    'heading1'  => $heading1, 
                    'description1'  => $description1,  
                    'type'  => $type, 
                );
                if(!empty($this->input->post('title2')) || !empty($this->input->post('heading2')) || !empty($this->input->post('description3'))){
                    $newdata['title2'] =  $title2;
                    $newdata['heading2'] =  $heading2;
                    $newdata['description3'] =  $description3;
                }else{
                    $newdata['title2'] =  null;
                    $newdata['heading2'] =  null;
                    $newdata['description3'] =  null;
                }
                $gallerydata = array(
                    'category'  => $page, 
                );
                if(!empty($this->input->post('description2'))){
                    $newdata['description2'] = $this->input->post('description2');
                }
                if(!empty($this->input->post('description4'))){
                    $newdata['description4'] = $this->input->post('description4');
                }
                $application_id = $this->m_services->updateService($newdata, $id);
                if($application_id != false)
                {
                    $this->m_services->updateServiceGallery($gallerydata, $id);
                    $this->m_services->updateServiceGalleryVideo($gallerydata, $id);
                    $this->m_services->updateServiceGalleryAudio($gallerydata, $id);
                    $this->session->set_flashdata('success','Service Updated');
                    redirect('services/'.$type);
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('services/edit/'.$this->encryption_url->safe_b64encode($id));
                }

            }else{
                $this->load->view('pages/services/edit', $data);
            }
             
		}else{
            $this->session->set_flashdata('error','Invalid Service ID');
            return redirect('dashboard');
		}
    }

    public function gallery($id='', $type='')
	{
        $data['title']  = 'Services - Hrudayaspandana';
        switch ($type) {
			case "madhava-seva":
                $type= "madhava-seva";
                break;
  
              case "manava-seva":
                $type= "manava-seva";
                break;
  
              case "vedic-rituals":
                  $type= "vedic-rituals";
                  break;
  
              case "activities":
                  $type= "activities";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $id = $this->encryption_url->safe_b64decode($id);
        $data['service']= $this->m_services->getService($id);
		if(!empty($id) && !empty($data['service'])){
            
           
            
            $this->load->view('pages/services/view-services-gallery', $data);  
		}else{
            $this->session->set_flashdata('error','Invalid Page');
            return redirect('services/'.$type);
		}
    }

    public function galleryUpload($id='')
	{
        $config['upload_path']          = '../assets/images/home/gallery';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
        $id = $this->encryption_url->safe_b64decode($id);
        $data['service']= $this->m_services->getService($id);
        if ( ! $this->upload->do_upload('files'))
        {
            $data = array(
                'success'=>false,
                "error"=> substr($this->upload->display_errors(),3,-3),
                "errorcode"=>'400'
            );
            echo json_encode($data);
        }else{

            $newdata = array(
                'image' => $this->upload->data('file_name'),
                'category' => $data['service']->page,
                'service_id' => $data['service']->id,
            );
            $application_id = $this->m_services->insertGallery($newdata);
            if($application_id != false)
            {
                $data = array(
                    'success'=>true
                );
            }else{
                $data = array(
                    'success'=>false,
                    "error"=> 'Something went wrong, Please try again',
                    "errorcode"=>'400'
                );
            }
            echo json_encode($data);
        }
    }

    public function galleryView($id='')
	{
        $id = $this->encryption_url->safe_b64decode($id);
        $data['result']= $this->m_services->serviceGetById($id);
        echo json_encode($data);
    }

    public function deleteGalleryImage($id = '')
    {
        
        $this->load->model('m_gallery');
        $imageResult = $this->m_gallery->getHomeGalleryImage($id);
        $service= $this->m_services->getService($imageResult->service_id);
        $application_id = $this->m_gallery->deleteHomeGalleryImage($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/gallery/'.$imageResult->image;
            unlink($path);
            $this->session->set_flashdata('success','Image Deleted');
            redirect('services/gallery/'.$this->encryption_url->safe_b64encode($service->id).'/'.$service->type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('services/gallery/'.$this->encryption_url->safe_b64encode($service->id).'/'.$service->type);
        }
    }

    public function audio($id='', $type='')
	{
        
        $data['title']  = 'Services - Hrudayaspandana';
        switch ($type) {
			case "madhava-seva":
                $type= "madhava-seva";
                $data['type']= "madhava-seva";
                $data['pagetype']= "Madhava Seva";
                break;
  
              case "manava-seva":
                $type= "manava-seva";
                $data['type']= "manava-seva";
                $data['pagetype']= "Manava Seva";
                break;
  
              case "vedic-rituals":
                  $type= "vedic-rituals";
                  $data['type']= "vedic-rituals";
                $data['pagetype']= "Vedic Rituals";
                  break;
  
              case "activities":
                  $type= "activities";
                  $data['type']= "activities";
                $data['pagetype']= "Activities";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $id = $this->encryption_url->safe_b64decode($id);
        $data['id'] = $id;
        $data['service']= $this->m_services->getService($id);
		if(!empty($id) && !empty($data['service'])){
           
            $data['result'] = $this->m_services->galleryGetByServiceId($id);
            $this->load->view('pages/services/audios', $data);  
		}else{
            $this->session->set_flashdata('error','Invalid Page');
            return redirect('services/'.$type);
		}
    }

    public function galleryAudioUpload($id='', $type='')
	{
        switch ($type) {
			case "madhava-seva":
                $type= "madhava-seva";
                $data['type']= "madhava-seva";
                $data['pagetype']= "Madhava Seva";
                break;
  
              case "manava-seva":
                $type= "manava-seva";
                $data['type']= "manava-seva";
                $data['pagetype']= "Manava Seva";
                break;
  
              case "vedic-rituals":
                  $type= "vedic-rituals";
                  $data['type']= "vedic-rituals";
                $data['pagetype']= "Vedic Rituals";
                  break;
  
              case "activities":
                  $type= "activities";
                  $data['type']= "activities";
                $data['pagetype']= "Activities";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}

        $id = $this->encryption_url->safe_b64decode($id);
        $data['id'] = $id;
        $data['service']= $this->m_services->getService($id);
		if(!empty($id) && !empty($data['service'])){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');
            
            if($this->form_validation->run()) 
            {
                    $config['upload_path']          = '../assets/images/home/audio';
                    $config['allowed_types']        = 'wav|mp3|aac';                
                    $config['max_width']            = 0;
                    $config['encrypt_name']         = TRUE;
                    $this->load->library('upload', $config);
                    if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

                    if ( ! $this->upload->do_upload('image'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        $data['title']  = 'Gallery - Hrudayaspandana';
                        $this->load->view('pages/services/add-audios', $data);
                    }else{

                        $title 	= $this->input->post('title');
                        $description 	= $this->input->post('description');
                        $image = $this->upload->data('file_name');

                        $data = array(
                            'title'  => $title,  
                            'description'  => $description,  
                            'audio'  => $image,  
                            'category'  => $data['service']->page,   
                            'service_id'  => $data['service']->id,   
                        );
                        $data = html_escape($this->security->xss_clean($data));
                        $application_id = $this->m_services->insertGalleryAudio($data);
                        if($application_id != false)
                        {
                            $this->session->set_flashdata('success','Audio Stored');
                            redirect('services/audio/'.$this->encryption_url->safe_b64encode($id).'/'.$type);
                            
                        }else{
                            $this->session->set_flashdata('error','Some error occured please try again');
                            redirect('services/new/gallery/audio/'.$this->encryption_url->safe_b64encode($id).'/'.$type);
                        }
                    }
            }else{
                $data['title']  = 'Gallery - Hrudayaspandana';
                $this->load->view('pages/services/add-audios', $data);
            }    
		}else{
            $this->session->set_flashdata('error','Invalid Page');
            return redirect('services/'.$type);
		}

    }

    public function deleteGalleryAudio($id = '')
    {
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_services->getHomeGalleryAudio($id);
        $service= $this->m_services->getService($imageResult->service_id);
        $application_id = $this->m_services->deleteHomeGalleryAudio($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/audio/'.$imageResult->audio;
            unlink($path);
            $this->session->set_flashdata('success','Audio Deleted');
            redirect('services/audio/'.$this->encryption_url->safe_b64encode($service->id).'/'.$service->type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('services/audio/'.$this->encryption_url->safe_b64encode($service->id).'/'.$service->type);
        }
    }

    public function videos($id='', $type='')
	{
        $data['title']  = 'Services - Hrudayaspandana';
        switch ($type) {
			case "madhava-seva":
              $type= "madhava-seva";
              $data['type']= "madhava-seva";
			  break;

			case "manava-seva":
              $type= "manava-seva";
              $data['type']= "manava-seva";
			  break;

			case "vedic-rituals":
                $type= "vedic-rituals";
                $data['type']= "vedic-rituals";
				break;

			case "activities":
                $type= "activities";
                $data['type']= "activities";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['id'] = $id;
        $id = $this->encryption_url->safe_b64decode($id);
        $data['service']= $this->m_services->getService($id);
        $data['result'] = $this->m_services->galleryVideosGet($id);
		if(!empty($id) && !empty($data['service'])){

            $this->load->library('form_validation');
            $this->form_validation->set_rules('youtube', 'Youtube Video ID', 'trim|required');
            
            if($this->form_validation->run()) 
            {

                    $youtube 	= $this->input->post('youtube');

                    $data = array(
                        'youtube'  => $youtube,  
                        'category'  => $data['service']->page,   
                        'service_id'  => $data['service']->id,   
                    );
                    $data = html_escape($this->security->xss_clean($data));
                    $application_id = $this->m_services->insertGalleryVideo($data);
                    if($application_id != false)
                    {
                        $this->session->set_flashdata('success','Video Stored');
                        redirect('services/videos/'.$this->encryption_url->safe_b64encode($id).'/'.$type);
                        
                    }else{
                        $this->session->set_flashdata('error','Some error occured please try again');
                        redirect('services/videos/'.$this->encryption_url->safe_b64encode($id).'/'.$type);
                    }
            }else{
                $this->load->view('pages/services/videos', $data);
            }
              
		}else{
            $this->session->set_flashdata('error','Invalid Page');
            return redirect('services/'.$type);
		}
    }

    public function videos_delete($id='', $type='')
	{
        $data['title']  = 'Services - Hrudayaspandana';
        switch ($type) {
			case "madhava-seva":
                $type= "madhava-seva";
                $data['type']= "madhava-seva";
                break;
  
              case "manava-seva":
                $type= "manava-seva";
                $data['type']= "manava-seva";
                break;
  
              case "vedic-rituals":
                  $type= "vedic-rituals";
                  $data['type']= "vedic-rituals";
                  break;
  
              case "activities":
                  $type= "activities";
                  $data['type']= "activities";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['id'] = $id;
        $id = $this->encryption_url->safe_b64decode($id);
        $data['service']= $this->m_services->getVideoServiceOne($id);
		if(!empty($id) && !empty($data['service'])){

            $application_id = $this->m_services->deleteGalleryVideo($id);
            if($application_id != false)
            {
                $this->session->set_flashdata('success','Video deleted');
                redirect('services/videos/'.$this->encryption_url->safe_b64encode($data['service']->service_id).'/'.$type);
                
            }else{
                $this->session->set_flashdata('error','Some error occured please try again');
                redirect('services/videos/'.$this->encryption_url->safe_b64encode($data['service']->service_id).'/'.$type);
            }
              
		}else{
            $this->session->set_flashdata('error','Invalid Page');
            return redirect('services/'.$type);
		}
    }

    


  
}
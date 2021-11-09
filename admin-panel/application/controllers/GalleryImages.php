<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryImages extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_galleryimages');
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
        $data['title']  = 'Gallery - Hrudayaspandana';
        switch ($type) {
			case "manava-seva":
              $type= "manava-seva";
              $data['type']= "manava-seva";
              $data['pagetype']= "Manava Seva";
			  break;

			case "madhava-seva":
                $type= "madhava-seva";
                $data['type']= "madhava-seva";
                $data['pagetype']= "Madhava Seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['result'] = $this->m_galleryimages->galleryGetByType($data['pagetype']);
        $this->load->view('pages/images/images', $data);  
    }

    public function upload($type = null)
    {
        switch ($type) {
			case "manava-seva":
                $type= "manava-seva";
                $data['type']= "manava-seva";
                $data['pagetype']= "Manava Seva";
                break;
  
              case "madhava-seva":
                  $type= "madhava-seva";
                  $data['type']= "madhava-seva";
                  $data['pagetype']= "Madhava Seva";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}

        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Description', 'trim|required');
        
        if($this->form_validation->run()) 
		{
                $config['upload_path']          = '../assets/images/home/gallery';
                $config['allowed_types']        = 'jpg|png|jpeg';                
                $config['max_width']            = 0;
                $config['encrypt_name']         = TRUE;
                $this->load->library('upload', $config);
                if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

                if ( ! $this->upload->do_upload('image'))
                {
                    $this->session->set_flashdata('error',$this->upload->display_errors());
                    $data['title']  = 'Gallery - Hrudayaspandana';
                    $this->load->view('pages/images/add', $data);
                }else{

                    $title 	= $this->input->post('title');
                    $description 	= $this->input->post('description');
                    $image = $this->upload->data('file_name');

                    $data = array(
                        'title'  => $title,  
                        'description'  => $description,  
                        'image'  => $image,  
                        'category'  => $data['pagetype'],   
                    );
                    $data = html_escape($this->security->xss_clean($data));
                    $application_id = $this->m_galleryimages->insertHomeGalleryAudio($data);
                    if($application_id != false)
                    {
                        $this->session->set_flashdata('success','Image Stored');
                        redirect('gallery-images/'.$type);
                        
                    }else{
                        $this->session->set_flashdata('error','Some error occured please try again');
                        redirect('gallery-images/upload/'.$type);
                    }
                }
        }else{
            $data['title']  = 'Gallery - Hrudayaspandana';
            $this->load->view('pages/images/add', $data);
        }    
    }

    public function delete($id = '', $type='')
    {
        switch ($type) {
			case "manava-seva":
                $type= "manava-seva";
                $data['type']= "manava-seva";
                $data['pagetype']= "Manava Seva";
                break;
  
              case "madhava-seva":
                  $type= "madhava-seva";
                  $data['type']= "madhava-seva";
                  $data['pagetype']= "Madhava Seva";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}

        $id = $this->encryption_url->safe_b64decode($id);
        $audioResult = $this->m_galleryimages->getHomeGalleryAudio($id);
        $application_id = $this->m_galleryimages->deleteHomeGalleryAudio($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/gallery/'.$audioResult->image;
            unlink($path);
            $this->session->set_flashdata('success','Image Deleted');
            redirect('gallery-images/'.$type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('gallery-images/'.$type);
        }
    }
  
}
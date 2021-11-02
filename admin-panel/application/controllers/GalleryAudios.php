<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryAudios extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_galleryaudios');
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
			case "messages":
              $type= "messages";
              $data['type']= "messages";
              $data['pagetype']= "Messages";
			  break;

			case "guru-bhodha":
                $type= "guru-bhodha";
                $data['type']= "guru-bhodha";
                $data['pagetype']= "Guru Bhodha";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['result'] = $this->m_galleryaudios->galleryGetByType($data['pagetype']);
        $this->load->view('pages/audios/audios', $data);  
    }

    public function upload($type = null)
    {
        switch ($type) {
			case "messages":
                $type= "messages";
                $data['type']= "messages";
                $data['pagetype']= "Messages";
                break;
  
              case "guru-bhodha":
                  $type= "guru-bhodha";
                  $data['type']= "guru-bhodha";
                  $data['pagetype']= "Guru Bhodha";
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
                    $this->load->view('pages/audios/add', $data);
                }else{

                    $title 	= $this->input->post('title');
                    $description 	= $this->input->post('description');
                    $image = $this->upload->data('file_name');

                    $data = array(
                        'title'  => $title,  
                        'description'  => $description,  
                        'audio'  => $image,  
                        'category'  => $data['pagetype'],   
                    );
                    $data = html_escape($this->security->xss_clean($data));
                    $application_id = $this->m_galleryaudios->insertHomeGalleryAudio($data);
                    if($application_id != false)
                    {
                        $this->session->set_flashdata('success','Audio Stored');
                        redirect('gallery-audios/'.$type);
                        
                    }else{
                        $this->session->set_flashdata('error','Some error occured please try again');
                        redirect('gallery-audio/upload/'.$type);
                    }
                }
        }else{
            $data['title']  = 'Gallery - Hrudayaspandana';
            $this->load->view('pages/audios/add', $data);
        }    
    }

    public function delete($id = '', $type='')
    {
        switch ($type) {
			case "messages":
                $type= "messages";
                $data['type']= "messages";
                $data['pagetype']= "Messages";
                break;
  
              case "guru-bhodha":
                  $type= "guru-bhodha";
                  $data['type']= "guru-bhodha";
                  $data['pagetype']= "Guru Bhodha";
                  break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}

        $id = $this->encryption_url->safe_b64decode($id);
        $audioResult = $this->m_galleryaudios->getHomeGalleryAudio($id);
        $application_id = $this->m_galleryaudios->deleteHomeGalleryAudio($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/audio/'.$audioResult->audio;
            unlink($path);
            $this->session->set_flashdata('success','Audio Deleted');
            redirect('gallery-audios/'.$type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('gallery-audios/'.$type);
        }
    }
  
}
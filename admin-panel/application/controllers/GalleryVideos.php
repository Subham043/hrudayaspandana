<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GalleryVideos extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_galleryvideos');
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
    public function index($type = null)
    {
        $data['title']  = 'Gallery - Hrudayaspandana';
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
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $data['result'] = $this->m_galleryvideos->galleryVideosGet($data['pagetype']);
        $this->load->view('pages/videos/videos', $data);  
    }

    public function upload($type = null)
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
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}

        $this->load->library('form_validation');
        $this->form_validation->set_rules('youtube', 'Youtube Video ID', 'trim|required');
        
        if($this->form_validation->run()) 
		{

                $youtube 	= $this->input->post('youtube');

                $data = array(
                    'youtube'  => $youtube,  
                    'category'  => $data['pagetype'],   
                );
                $data = html_escape($this->security->xss_clean($data));
                $application_id = $this->m_galleryvideos->insertGalleryVideo($data);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','Video Stored');
                    redirect('gallery-videos/'.$type);
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('e-hundi/upload/'.$type);
                }
        }else{
            $data['title']  = 'Gallery - Hrudayaspandana';
            $this->load->view('pages/videos/add', $data);
        }    
    }

    

    public function delete($id = '', $type='')
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
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}

        $id = $this->encryption_url->safe_b64decode($id);
        $application_id = $this->m_galleryvideos->deleteGalleryVideos($id);
        if($application_id != false)
        {
            $this->session->set_flashdata('success','Video Deleted');
            redirect('gallery-videos/'.$type);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('gallery-videos/'.$type);
        }
    }

    


  
}
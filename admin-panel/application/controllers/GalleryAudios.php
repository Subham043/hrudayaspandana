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

    public function view($type='')
	{
        $data['title']  = 'Gallery - Hrudayaspandana';
        switch ($type) {
			case "madhava-seva":
              $type= "Madhava Seva";
              $data['type'] = "Madhava Seva";
              $data['pagetype'] = "madhava-seva";
			  break;

			case "manava-seva":
                $type= "Manava Seva";
                $data['type'] = "Manava Seva";
                $data['pagetype'] = "manava-seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $this->load->view('pages/gallery/view-services-gallery-audios', $data);
    }

    public function galleryAudioUpload($type='')
	{
        $config['upload_path']          = '../assets/images/home/audio';
        $config['allowed_types']        = 'wav|mp3|aac';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
        switch ($type) {
			case "madhava-seva":
              $type= "Madhava Seva";
			  break;

			case "manava-seva":
                $type= "Manava Seva";
				break;
			
			default:
                $data['message'] = "type error";
                echo json_encode($data);
                die();
                exit;
		}
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
                'audio' => $this->upload->data('file_name'),
                'category' => $type,
            );
            // echo json_encode($newdata);
            // exit;
            $application_id = $this->m_galleryaudios->insertHomeGalleryAudio($newdata);
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

    public function galleryAudioView($type='')
	{
        switch ($type) {
			case "madhava-seva":
              $type= "Madhava Seva";
			  break;

			case "manava-seva":
                $type= "Manava Seva";
				break;
			
			default:
                $data['message'] = "type error";
                echo json_encode($data);
                die();
                exit;
		}
        $data['result']= $this->m_galleryaudios->galleryGetByType($type);
        echo json_encode($data);
    }

    public function deleteGalleryAudio($id = '', $type='')
    {
        // $id = $this->encryption_url->safe_b64decode($id);
        switch ($type) {
			case "madhava-seva":
              $type= "Madhava Seva";
              $data['type'] = "Madhava Seva";
              $data['pagetype'] = "madhava-seva";
			  break;

			case "manava-seva":
                $type= "Manava Seva";
                $data['type'] = "Manava Seva";
                $data['pagetype'] = "manava-seva";
				break;
			
			default:
				$this->session->set_flashdata('error','Invalid Page');
				redirect('dashboard');
		}
        $audioResult = $this->m_galleryaudios->getHomeGalleryAudio($id);
        $application_id = $this->m_galleryaudios->deleteHomeGalleryAudio($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/audio/'.$audioResult->audio;
            unlink($path);
            $this->session->set_flashdata('success','Audio Deleted');
            redirect('gallery-audios/'.$data['pagetype']);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('gallery-audios/'.$data['pagetype']);
        }
    }
  
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_gallery');
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


    // public function index($id = null)
    // {
    //     $data['title']  = 'Gallery - Hrudayaspandana';
    //     $data['result1'] = $this->m_gallery->galleryGet1();
    //     $data['result2'] = $this->m_gallery->galleryGet2();
    //     $this->load->view('pages/gallery/gallery', $data);  

        
    // }

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
        $this->load->view('pages/gallery/view-services-gallery', $data);
    }

    public function galleryUpload($type='')
	{
        $config['upload_path']          = '../assets/images/home/gallery';
        $config['allowed_types']        = 'jpg|png|jpeg';                
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
                'image' => $this->upload->data('file_name'),
                'category' => $type,
            );
            // echo json_encode($newdata);
            // exit;
            $application_id = $this->m_gallery->insertHomeGalleryImage($newdata);
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

    public function galleryView($type='')
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
        $data['result']= $this->m_gallery->galleryGetByType($type);
        echo json_encode($data);
    }

    // public function addGalleryImage($id = null)
    // {
    //     $config['upload_path']          = '../assets/images/home/gallery';
    //     $config['allowed_types']        = 'jpg|png|jpeg';                
    //     $config['max_width']            = 0;
    //     $config['encrypt_name']         = TRUE;
    //     $this->load->library('upload', $config);
    //     if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
    //     if ( ! $this->upload->do_upload('thumbnail'))
    //     {
    //         $this->session->set_flashdata('error',$this->upload->display_errors());
    //         redirect('gallery');
    //     }
    //     else
    //     { 
    //         $image = $this->upload->data('file_name'); 
    //         $category 	= $this->input->post('category');
    //         $newdata = array(
    //             'image'  => $image, 
    //             'category'  => $category, 
    //         );
    //         $application_id = $this->m_gallery->insertHomeGalleryImage($newdata);
    //         if($application_id != false)
    //         {
    //             $this->session->set_flashdata('success','Image Stored');
    //             redirect('gallery');
                
    //         }else{
    //             $this->session->set_flashdata('error','Some error occured please try again');
    //             redirect('gallery');
    //         }
    //     }
    // }

    public function deleteGalleryImage($id = '', $type='')
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
        $imageResult = $this->m_gallery->getHomeGalleryImage($id);
        $application_id = $this->m_gallery->deleteHomeGalleryImage($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/gallery/'.$imageResult->image;
            unlink($path);
            $this->session->set_flashdata('success','Image Deleted');
            redirect('gallery/'.$data['pagetype']);
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('gallery/'.$data['pagetype']);
        }
    }
  
}
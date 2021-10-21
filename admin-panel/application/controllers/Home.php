<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_home');
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


    public function video($id = null)
    {
        $this->load->library('form_validation');
        $data['title']  = 'Home - Hrudayaspandana';
        $config['upload_path']          = '../assets/images/home/video';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
		if(!empty($id)){
            $data['result'] = $this->m_home->getHomeVideo($id);
            if(empty($data['result'])){
                $this->session->set_flashdata('error', 'Invalid Video ID');
                return redirect('dashboard');
            }
            $this->form_validation->set_rules('url', 'Youtube Video ID', 'trim|required|regex_match[/^[a-z 0-9~%.:_\@\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
            if($this->form_validation->run()) 
		    {
                
                if(isset($_FILES["thumbnail"]["name"]) && !empty($_FILES["thumbnail"]["name"])){
                    if ( ! $this->upload->do_upload('thumbnail'))
                    {
                        $this->session->set_flashdata('error',$this->upload->display_errors());
                        $this->load->view('pages/home/view-home-video', $data);
                    }
                    else
                    { 
                        $path = '../assets/images/home/video/'.$data['result']->thumbnail;
                        unlink($path);
                        $thumbnail = $this->upload->data('file_name'); 
                        $url 	= $this->input->post('url');
                        $newdata = array(
                            'thumbnail'  => $thumbnail, 
                            'url' 		=> $url,
                        );
                        $application_id = $this->m_home->insertHomeVideo($newdata, $id);
                        if($application_id != false)
                        {
                            $this->session->set_flashdata('success','Data Stored');
                            redirect('home/video/1');
                            
                        }else{
                            $this->session->set_flashdata('error','Some error occured please try again');
                            redirect('home/video/1');
                        }
                    }
                }else{
                    $url 	= $this->input->post('url');
                    $data = array(
                        'url' 		=> $url,
                    );
                    $data = html_escape($this->security->xss_clean($data));
                    $application_id = $this->m_home->insertHomeVideo($data, $id);
                    if($application_id != false)
                    {
                        $this->session->set_flashdata('success','Data Stored');
                        redirect('home/video/1');
                        
                    }else{
                        $this->session->set_flashdata('error','Some error occured please try again');
                        redirect('home/video/1');
                    }
                }
            }else{
                $this->load->view('pages/home/view-home-video', $data);
            }  
		}else{
            $this->session->set_flashdata('error', 'Invalid Video ID');
            return redirect('dashboard');
		}  
    }

    public function banner($id = null)
    {
        $config['upload_path']          = '../assets/images/home/banner';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);

        $this->form_validation->set_rules('quoteline1', 'Quote Line 1', 'trim|required|min_length[10]|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        if(!empty($this->input->post('quoteline2'))){
            $this->form_validation->set_rules('quoteline2', 'Quote Line 2', 'trim|required|min_length[10]|max_length[40]|regex_match[/^[a-z 0-9~%.:_\@\'\"\"\?\(\)\-\/\&+=,]+$/i]', array('regex_match' => 'Enter a valid %s'));
        }
        
        if($this->form_validation->run()) 
		{

            if ( ! $this->upload->do_upload('thumbnail'))
            {
                $this->session->set_flashdata('error',$this->upload->display_errors());
                $data['title']  = 'Home - Hrudayaspandana';
                $data['result'] = $this->m_home->getBannerImage();
                $this->load->view('pages/home/home-banner', $data);
            }
            else
            { 
                $image = $this->upload->data('file_name'); 
                $quoteline1 	= $this->input->post('quoteline1');
                $quoteline2 	= $this->input->post('quoteline2');
                $newdata = array(
                    'image'  => $image, 
                    'quoteline1'  => $quoteline1, 
                    'quoteline2'  => $quoteline2, 
                );
                $application_id = $this->m_home->insertBannerImage($newdata);
                if($application_id != false)
                {
                    $this->session->set_flashdata('success','Image Stored');
                    redirect('home/banner');
                    
                }else{
                    $this->session->set_flashdata('error','Some error occured please try again');
                    redirect('home/banner');
                }
            }
        }else{
            $data['title']  = 'Home - Hrudayaspandana';
            $data['result'] = $this->m_home->getBannerImage();
            $this->load->view('pages/home/home-banner', $data);
        }  
    }

    public function deleteBannerImage($id = '')
    {
        $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_home->getHomeBannerImage($id);
        $application_id = $this->m_home->deleteHomeBannerImage($id);
        if($application_id != false)
        {
            $path = '../assets/images/home/banner/'.$imageResult->image;
            unlink($path);
            $this->session->set_flashdata('success','Image Deleted');
            redirect('home/banner');
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('home/banner');
        }
    }

    


  
}
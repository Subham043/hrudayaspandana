<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crossword extends CI_Controller {

	/*--construct--*/
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('admin_id') == '' ) {$this->session->set_flashdata('error', 'Please try again'); redirect('login'); }
        $this->load->model('m_crossword');
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


    public function index()
	{
        $data['title']  = 'Crossword - Hrudayaspandana';
        $this->load->view('pages/crossword/crossword', $data);
    }

    public function upload()
	{
        $config['upload_path']          = '../assets/images/crossword';
        $config['allowed_types']        = 'jpg|png|jpeg';                
        $config['max_width']            = 0;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload', $config);
        if(!is_dir($config['upload_path'])) mkdir($config['upload_path'], 0777, TRUE);
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
            );
            // echo json_encode($newdata);
            // exit;
            $application_id = $this->m_crossword->insertCrossword($newdata);
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

    public function view()
	{
        $data['result']= $this->m_crossword->getAllCrossword();
        echo json_encode($data);
    }

    public function delete($id = '')
    {
        // $id = $this->encryption_url->safe_b64decode($id);
        $imageResult = $this->m_crossword->getCrossword($id);
        $application_id = $this->m_crossword->deleteCrossword($id);
        if($application_id != false)
        {
            $path = '../assets/images/crossword/'.$imageResult->image;
            unlink($path);
            $this->session->set_flashdata('success','Image Deleted');
            redirect('crossword');
            
        }else{
            $this->session->set_flashdata('error','Some error occured please try again');
            redirect('crossword');
        }
    }
  
}
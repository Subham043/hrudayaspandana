<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    // protected $ci= 
    
    
    if(!function_exists('pdfConverter')) {
        function pdfConverter($modal,$view,$id) {
            $ci = get_instance();
            $id = $ci->encryption_url->safe_b64decode($id);
            $data['result'] = $ci->$modal->getForm($id );
            require_once $_SERVER['DOCUMENT_ROOT'].'/bcp/vendor/autoload.php';
            $mpdf = new \Mpdf\Mpdf([
                'default_font_size' => 9,
                'default_font' => 'tunga'
            ]);
            $html = $ci->load->view($view, $data, TRUE);
            $mpdf->WriteHTML($html);
            $mpdf->Output();
            exit;    
        }
    }

  




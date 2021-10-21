<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    // protected $ci= 
    
    
    if(!function_exists('imageConverter')) {
        function imageConverter($path) {
            $ci = get_instance();
            $path = $ci->config->item('web_url').'document/'.$path;
            $ci = get_instance();
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            return  $base64;
        }
    }

  




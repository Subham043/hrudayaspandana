<?php class MY_Form_validation extends CI_Form_validation {
    protected $CI;
    public function __construct() {
        parent::__construct();
            // reference to the CodeIgniter super object
        $this->CI =& get_instance();
    }

    public function customAlpha($str) {
        if (!preg_match('/^[a-z 0-9~%.:_\-@\&+=,]+$/i',$str) && !empty($str))
        {
        	$this->CI->form_validation->set_message('customAlpha', 'The {field} contains invalid special characters');
            return false;
        }else {
            return TRUE;
        }
    }
}
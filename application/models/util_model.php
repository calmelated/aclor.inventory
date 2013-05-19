<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Util_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function str_escape($pstr) {
        $search  = array("\\","\0","\n","\r","\x1a","'",'"');
        $replace = array("\\\\","\\0","\\n","\\r","\Z","\'",'\"');
        return htmlspecialchars(str_replace($search, $replace, $pstr));
    }

    public function input_escape($field) {
        return $this->str_escape($this->input->post($field, true));
    }
}

/* End of file project_model.php */
/* Location: ./application/models/project_model.php */

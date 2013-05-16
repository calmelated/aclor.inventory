<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Fileup extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function show_page($page = "fileup", $status) {
        $data['upload_status'] = $status;
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view($page, $data);
        $this->load->view('footer');
    }

    function index() {
        return $this->show_page("fileup", "");
    }

    function items() {
        return $this->show_page("upitems", "");
    }

    function upitems() {
        $config['upload_path']   = 'files/';
        $config['allowed_types'] = 'gif|jpg|png|txt|csv|doc|xls|xlsx|docs|cvs';
        $config['max_size']      = strval(1024 * 512); // 512MB

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) { // failed
            return $this->show_page('upitems', $this->upload->display_errors());
        } else { // success
            // parse the itemlist, and write to the database
            $data['upload_status'] = $this->upload->data();
            $this->load->model('order_model');
            $this->order_model->import_items($data['upload_status']['full_path']);
            return $this->show_page('upitems', $data['upload_status']);
        }
    }

    public function upload() {
        error_reporting(E_ALL | E_STRICT);

        $this->load->helper("upload.class");
        $upload_handler = new UploadHandler();

        header('Pragma: no-cache');
        header('Cache-Control: no-store, no-cache, must-revalidate');
        header('Content-Disposition: inline; filename="files.json"');
        header('X-Content-Type-Options: nosniff');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: OPTIONS, HEAD, GET, POST, PUT, DELETE');
        header('Access-Control-Allow-Headers: X-File-Name, X-File-Type, X-File-Size');

        switch ($_SERVER['REQUEST_METHOD']) {
            case 'OPTIONS':
                break;
            case 'HEAD':
            case 'GET':
                $upload_handler->get();
                break;
            case 'POST':
                if (isset($_REQUEST['_method']) && $_REQUEST['_method'] === 'DELETE') {
                    $upload_handler->delete();
                } else {
                    $upload_handler->post();
                }
                break;
            case 'DELETE':
                $upload_handler->delete();
                break;
            default:
                header('HTTP/1.1 405 Method Not Allowed');
        }
    }
}
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inodr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    private function show_page($act, $id, $item, $from, $to) {
        $page = ($act != 'list') ? "detail" : "list";
        if (!file_exists('application/views/inodr_' . $page. '.php')) {
            show_404();
        }

        $data['act']    = $act; // list or detail_add or detail_edit
        $data['inodrs'] = $this->order_model->get_inout_order("inodr", $act, $id, $item, $from, $to);
        if($page == "detail") {
            $data['units']     = $this->order_model->get_typeahead("units");
            $data['items']     = $this->order_model->get_typeahead("items");
            $data['companies'] = $this->order_model->get_typeahead("companies");
        }

        $this->load->view('header'      ,$data);
        $this->load->view('nav'         ,$data);
        $this->load->view('inodr_'.$page,$data);
        $this->load->view('footer'      ,$data);
    }

    private function form_verify() {
        $this->form_validation->set_rules('rcv_date'  , 'Receive Date'    , 'required|xss_clean');
        $this->form_validation->set_rules('owner'     , 'Material Owner'  , 'required|max_length[32]|xss_clean');
        $this->form_validation->set_rules('vendor'    , 'Material Vendor' , 'required|max_length[32]|xss_clean');
        $this->form_validation->set_rules('item_num'  , 'Item #'          , 'required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('import_num', 'Import #'        , 'max_length[16]|xss_clean');
        $this->form_validation->set_rules('po_num'    , 'PO #'            , 'required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('qty'       , 'Qty'             , 'required||numeric|xss_clean');
        $this->form_validation->set_rules('unit'      , 'Unit'            , 'required|xss_clean');
        $this->form_validation->set_rules('qty1'      , 'Qty1'            , 'numeric|xss_clean');
        $this->form_validation->set_rules('unit1'     , 'Unit1'           , 'xss_clean');
        if ($this->form_validation->run() == false) {
            return false;
        }
        return true;
    }

    public function index() {
        $this->show_page("list", null, null, null, null);
    }

    public function add() {
        if(empty($_POST)) {
            $this->show_page("detail_add", null, null, null, null);
        } else { // Posted !!
            if($this->form_verify() == false) {
                return $this->show_page("detail_add", null, null, null, null);
            }

            $id = $this->order_model->set_inodr(null);
            if($this->input->post('add_next') == 1) {
                redirect('inodr/add', 'refresh');
            } else {
                redirect('inodr/id/'.$id, 'refresh');
            }
        }
    }

    public function id($id) {
        $this->show_page("detail", $id, null, null, null);
    }

    public function id_edit($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }

        if(empty($_POST)) {
            $this->show_page("detail_edit", $id, null, null, null);
        } else {
            if($this->form_verify() == false) {
                return $this->show_page("detail_edit", null, null, null, null);
            }
            $this->order_model->set_inodr($id);
            redirect('inodr/id/'.$id, 'refresh');
        }
    }

    public function id_del($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }
        $this->order_model->del_order("inodr", $id);
        redirect('inodr', 'refresh');
    }

    public function item($item) {
        $this->show_page("list", null, $item, null, null);
    }

    public function time($from, $to) {
        $this->show_page("list", null, null, $from, $to);
    }

    public function item_time($item, $from, $to) {
        $this->show_page("list", null, $item, $from, $to);
    }
}

/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */

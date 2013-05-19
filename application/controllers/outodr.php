<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define("MAX_OUTODR", "16");

class Outodr extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    private function show_page($act, $id, $item, $from, $to) {
        $page = ($act != 'list') ? "detail" : "list";
        if (!file_exists('application/views/outodr_' . $page. '.php')) {
            show_404();
        }

        $data['act']    = $act; // list or detail_add or detail_edit
        $data['outodrs'] = $this->order_model->get_inout_order("outodr", $act, $id, $item, $from, $to);
        if($page == "detail") {
            $data['items'] = $this->order_model->get_typeahead("items", "name");
        }

        $this->load->view('header'      ,$data);
        $this->load->view('nav'         ,$data);
        $this->load->view('outodr_'.$page,$data);
        $this->load->view('footer'      ,$data);
    }

    private function form_verify() {
        $this->form_validation->set_rules('req_date'  ,    'Reqistition Date'   , 'required|xss_clean');
        $this->form_validation->set_rules('wo_num'    ,    'Work Order #'       , 'required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('fin_prod'  ,    'Finished Product'   , 'required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('raw_num'   ,    'Raw Material #'     , 'required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('wh_approved',   'Warehouse Approved' , 'required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('prod_approved', 'Production Approved', 'required|max_length[16]|xss_clean');

        $i = 0;
        $this->form_validation->set_rules('item_num_' . $i, 'Item #' , 'required|xss_clean');
        $this->form_validation->set_rules('qty_'      . $i, 'Qty'    , 'required|xss_clean');
        $this->form_validation->set_rules('unit_'     . $i, 'Unit'   , 'required|xss_clean');
        $this->form_validation->set_rules('qty1_'     . $i, 'Qty1'   , 'xss_clean');
        $this->form_validation->set_rules('unit1_'    . $i, 'Unit1'  , 'xss_clean');

        for($i = 1; $i < MAX_OUTODR; $i = $i + 1) {
            $this->form_validation->set_rules('item_num_' . $i, 'Item #' , 'xss_clean');
            $this->form_validation->set_rules('qty_'      . $i, 'Qty'    , 'xss_clean');
            $this->form_validation->set_rules('unit_'     . $i, 'Unit'   , 'xss_clean');
            $this->form_validation->set_rules('qty1_'     . $i, 'Qty1'   , 'xss_clean');
            $this->form_validation->set_rules('unit1_'    . $i, 'Unit1'  , 'xss_clean');
        }

        if ($this->form_validation->run() == false) {
            return false;
        }
        return true;
    }

    public function index() {
        $this->show_page("list", null, null, null, null);
    }

    public function add() {
        if(!($this->session->userdata['user_auth'] > 0)) { // auth:1 operator
            return redirect('noauth', 'refresh');
        }

        if(empty($_POST)) {
            $this->show_page("detail_add", null, null, null, null);
        } else { // Posted !!
            if($this->form_verify() == false) {
                return $this->show_page("detail_add", null, null, null, null);
            }

            $id = $this->order_model->set_outodr(null);
            if($this->input->post('add_next', true) == 1) {
                redirect('outodr/add', 'refresh');
            } else {
                redirect('outodr/id/'.$id, 'refresh');
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
            $this->order_model->set_outodr($id);
            redirect('outodr/id/'.$id, 'refresh');
        }
    }

    public function id_del($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }
        $this->order_model->remove("outodr", $id);
        redirect('outodr', 'refresh');
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

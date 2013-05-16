<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('ITEMS', 'items');

class Item extends CI_Controller {
    private $dbtable;

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    private function show_page($act, $id) {
        $page = ($act != 'list') ? "detail" : "list";
        if (!file_exists('application/views/item_' . $page. '.php')) {
            show_404();
        }

        $data['act']   = $act; // list or detail_add or detail_edit
        $data['items'] = $this->order_model->get_db_data(ITEMS, $id);

        $this->load->view('header'        ,$data);
        $this->load->view('nav'           ,$data);
        $this->load->view('item_'.$page   ,$data);
        $this->load->view('footer'        ,$data);
    }

    private function form_verify($id) {
        $this->form_validation->set_rules('item_num', 'Item #', 'required|max_length[16]|xss_clean|callback_check_item['.$id.']');
        $this->form_validation->set_rules('unit'    , 'Unit'  , 'required|xss_clean');
        $this->form_validation->set_rules('unit1'   , 'Unit1' , 'xss_clean');
        if ($this->form_validation->run() == false) {
            return false;
        }
        return true;
    }

    public function check_item($item_num, $id) {
        $sql = "select `name` from " . ITEMS . " where `name` = '" . $item_num . "'" ;
        if($id != null) {
            $sql = $sql . " and `id` != '" . $id . "'";
        }

        //log_message('error', 'sql: ' . $sql);
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('check_item', 'Duplicate Item Number !! ');
            return false; // duplicate
        } else {
            $this->dbtable = array(
                'name'  => $this->input->post('item_num'),
                'unit'  => $this->input->post('unit'),
                'unit1' => $this->input->post('unit1'),
            );
            return true;
        }
    }

    public function index() {
        $this->show_page("list", null);
    }

    public function add() {
        if(empty($_POST)) {
            $this->show_page("detail_add", null);
        } else { // Posted !!
            if($this->form_verify(null) == false) {
                return $this->show_page("detail_add", null);
            }
            $id = $this->order_model->set_db_data(ITEMS, null, $this->dbtable);
            if($this->input->post('add_next') == 1) {
                redirect('item/add', 'refresh');
            } else {
                redirect('item', 'refresh');
            }
        }
    }

    public function edit($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }

        if(empty($_POST)) {
            $this->show_page("detail_edit", $id);
        } else {
            if($this->form_verify($id) == false) {
                return $this->show_page("detail_edit", null);
            }
            $this->order_model->set_db_data(ITEMS, $id, $this->dbtable);
            redirect('item', 'refresh');
        }
    }

    public function remove($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }

        $this->order_model->remove(ITEMS, $id);
        redirect('item', 'refresh');
    }
}

/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */

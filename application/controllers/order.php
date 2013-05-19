<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
    }

    public function show_page($page = 'order_range', $result_data) {
        if (!file_exists('application/views/' . $page . '.php')) {
            show_404();
        }

        $data['orders']   = $result_data;
        $data['req_from'] = $this->input->post('from', true);
        $data['req_to']   = $this->input->post('to', true);
        if($page == "order_range") {
            $data['items'] = $this->order_model->get_typeahead("items", "name");
        }

        $this->load->view('header', $data);
        $this->load->view('nav'   , $data);
        $this->load->view($page   , $data);
        $this->load->view('footer', $data);
    }

    public function noauth() {
        return $this->show_page("noauth", null);
    }

    public function item_time($item, $from, $to) {
        $this->show_page('order', $this->order_model->get_order($item, $from, $to));
    }

    public function item($item) {
        $this->show_page('order', $this->order_model->get_order($item, null, null));
    }

    public function time($from, $to) {
        $this->show_page('order', $this->order_model->get_order(null, $from, $to));
    }

    public function index() {
        if(empty($_POST)) {
            return $this->show_page('order_range', null);
        }

        $this->form_validation->set_rules('from'     , 'From' , 'required|xss_clean');
        $this->form_validation->set_rules('to'       , 'To'   , 'required|xss_clean');
        $this->form_validation->set_rules('item_num' , 'Item' , 'xss_clean');
        if ($this->form_validation->run() == false) {
            return $this->show_page('order_range', null);
        }

        $from     = $this->input->post('from', true);
        $to       = $this->input->post('to', true);
        $item_num = $this->input->post('item_num', true);
        if($item_num == "any" || $item_num == "" || $item_num == "all") {
            $item_num = null;
        }
        $this->show_page('order', $this->order_model->get_order($item_num, $from, $to));
    }
}

/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */

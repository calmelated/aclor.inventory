<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('CPO' , 'cpo');
define('CPOC', 'cpoc');

class Cpo extends CI_Controller {
    private $dbcpo;
    private $dbcpoc = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }

    private function create_cpoc($cid_list) {
        // Data for Customer PO
        $this->dbcpo = array(
            'cid'            => serialize($cid_list),
            'modifier'       => $this->session->userdata['user_name'],
            'customer_po'    => $this->input->post('customer_po',true),
            'invoice'        => $this->input->post('invoice',true),
            'carrier'        => $this->input->post('carrier',true),
            'comment'        => $this->input->post('comment',true),
            'due_date'       => $this->input->post('due_date',true),
            'ship_name'      => $this->input->post('ship_name',true),
            'ship_date'      => $this->input->post('ship_date',true),
            'ship_address'   => $this->input->post('ship_address',true),
            'ship_city'      => $this->input->post('ship_city',true),
            'ship_tel'       => $this->input->post('ship_tel',true),
            'billing_name'   => $this->input->post('billing_name',true),
            'billing_address'=> $this->input->post('billing_address',true),
            'billing_city'   => $this->input->post('billing_city',true),
            'billing_tel'    => $this->input->post('billing_tel',true),
            'vender_name'    => $this->input->post('vender_name',true),
            'vender_address' => $this->input->post('vender_address',true),
            'vender_city'    => $this->input->post('vender_city',true),
            'vender_tel'     => $this->input->post('vender_tel',true),
            'factory_name'   => $this->input->post('factory_name',true),
            'factory_address'=> $this->input->post('factory_address',true),
            'factory_city'   => $this->input->post('factory_city',true),
            'factory_tel'    => $this->input->post('factory_tel',true),
        );
    }

    private function show_page($act, $id) {
        $page = ($act != 'list') ? "detail" : "list";
        if (!file_exists('application/views/cpo_' . $page. '.php')) {
            show_404();
        }

        $data['act']   = $act; // list or detail_add or detail_edit
        $data['cpos']  = "";
        $data['cpocs'] = "";
        if($act == "detail_edit") {
            $data['cpos'] = $this->order_model->get_db_data(CPO, $id);
            $cids = unserialize($data['cpos'][0]['cid']);

            $cid_list = "";
            foreach($cids as $cid) {
                $cid_list = $cid_list . " or `id` = '" . $cid . "'";
            }
            if(!empty($cid_list)) {
                $data['cpocs'] = $this->order_model->get_db_data(CPOC, "0' " . $cid_list . ";#");
                //var_dump($data['cpocs']);
            }
        }
        if($page != "list") {
            $data['items']     = $this->order_model->get_typeahead("items", "name");
            $data['companies'] = $this->order_model->get_typeahead("companies", "name");
        }

        $this->load->view('header'     ,$data);
        $this->load->view('nav'        ,$data);
        $this->load->view('cpo_'.$page ,$data);
        $this->load->view('footer'     ,$data);
    }

    private function form_verify($id) {
        $this->form_validation->set_rules('customer_po'     , 'Customer PO' , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('invoice'         , 'Invoice'     , 'trim|max_length[16]|xss_clean');
        $this->form_validation->set_rules('carrier'         , 'Carrier Name', 'trim|max_length[32]|xss_clean');
        $this->form_validation->set_rules('comment'         , 'Comment'     , 'trim|max_length[96]|xss_clean');
        $this->form_validation->set_rules('due_date'        , 'Due Date'    , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('ship_date'       , 'Ship Date'   , 'trim|max_length[16]|xss_clean');
        $this->form_validation->set_rules('ship_name'       , 'Name'        , 'trim|required|max_length[32]|xss_clean');
        $this->form_validation->set_rules('ship_tel'        , 'Telephone'   , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('ship_address'    , 'Address'     , 'trim|required|max_length[80]|xss_clean');
        $this->form_validation->set_rules('ship_city'       , 'City, State' , 'trim|required|max_length[64]|xss_clean');
        $this->form_validation->set_rules('vender_name'     , 'Name'        , 'trim|required|max_length[32]|xss_clean');
        $this->form_validation->set_rules('vender_tel'      , 'Telephone'   , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('vender_address'  , 'Address'     , 'trim|required|max_length[80]|xss_clean');
        $this->form_validation->set_rules('vender_city'     , 'City, State' , 'trim|required|max_length[64]|xss_clean');
        $this->form_validation->set_rules('billing_name'    , 'Name'        , 'trim|max_length[32]|xss_clean');
        $this->form_validation->set_rules('billing_tel'     , 'Telephone'   , 'trim|max_length[16]|xss_clean');
        $this->form_validation->set_rules('billing_address' , 'Address'     , 'trim|max_length[80]|xss_clean');
        $this->form_validation->set_rules('billing_city'    , 'City, State' , 'trim|max_length[64]|xss_clean');
        $this->form_validation->set_rules('factory_name'    , 'Name'        , 'trim|required|max_length[32]|xss_clean');
        $this->form_validation->set_rules('factory_tel'     , 'Telephone'   , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('factory_address' , 'Address'     , 'trim|required|max_length[80]|xss_clean');
        $this->form_validation->set_rules('factory_city'    , 'City, State' , 'trim|required|max_length[64]|xss_clean');

        $max_row_idx = $this->input->post('max_row_idx', true);
        for($i = 0; $i < $max_row_idx; $i++) {
            $this->form_validation->set_rules('all_qty_'     .$i , 'All QTY      '.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('pack_qty_'    .$i , 'Pack QTY     '.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('pallet_'      .$i , 'Pallet       '.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('item_num_'    .$i , 'Item Num     '.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('item_desc_'   .$i , 'Item Desc    '.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('cust_item_'   .$i , 'Customer Item'.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('net_weight_'  .$i , 'Net Weight   '.$i , 'trim|xss_clean');
            $this->form_validation->set_rules('gross_weight_'.$i , 'Gross Weight '.$i , 'trim|xss_clean');
        }

        // form Verify
        if ($this->form_validation->run() == false) {
            return false;
        }

        // Data for Customer PO Content
        $num_rec = 0;
        for($i = 0; $i < $max_row_idx; $i++) {
            $all_qty  = $this->input->post('all_qty_' .$i,true);
            $pack_qty = $this->input->post('pack_qty_' .$i,true);
            $item_num = $this->input->post('item_num_' .$i,true);
            if(empty($all_qty) && empty($pack_qty) && empty($item_num)) {
               continue;
            }

            $this->dbcpoc[$num_rec++] = array(
                'all_qty'       => $this->input->post('all_qty_'.$i     ,true),
                'pack_qty'      => $this->input->post('pack_qty_'.$i    ,true),
                'pallet'        => $this->input->post('pallet_'.$i      ,true),
                'item_num'      => $this->input->post('item_num_'.$i    ,true),
                'item_desc'     => $this->input->post('item_desc_'.$i   ,true),
                'cust_item'     => $this->input->post('cust_item_'.$i   ,true),
                'net_weight'    => $this->input->post('net_weight_'.$i  ,true),
                'gross_weight'  => $this->input->post('gross_weight_'.$i,true),
            );
        }
        return true;
    }

    public function check_cpoany($cpo_name, $id) {
        $this->load->model('util_model');
        $sql = "select `name` from " . COMPANIES . " where `name` = '" . $this->util_model->str_escape($cpo_name) . "'" ;
        if($id != null) {
            $sql = $sql . " and `id` != '" . $id . "'";
        }

        //log_message('error', 'sql: ' . $sql);
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('check_cpo_name', 'Duplicate Company Name !! ');
            return false; // duplicate
        }
        return true;
    }

    public function index() {
        $this->show_page("list", null);
    }

    public function add() {
        if(!($this->session->userdata['user_auth'] > 0)) { // auth:1 operatr
            return redirect('noauth', 'refresh');
        }

        if(empty($_POST)) {
            $this->show_page("detail_add", null);
        } else { // Posted !!
            if($this->form_verify(null) == false) {
                return $this->show_page("detail_add", null);
            }

            // Create new Customer PO content list
            $cid_list = array();
            foreach($this->dbcpoc as $dbcpoc) {
                $cid = $this->order_model->set_db_data(CPOC, null, $dbcpoc);
                array_push($cid_list, $cid);
            }

            // Create new Customer PO
            $this->create_cpoc($cid_list);
            $this->order_model->set_db_data(CPO, null, $this->dbcpo);

            if($this->input->post('add_next', true) == 1) {
                redirect('cpo/add', 'refresh');
            } else {
                redirect('cpo', 'refresh');
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
            $cpos = $this->order_model->get_db_data(CPO, $id);
            $cid_list = unserialize($cpos[0]['cid']);
            $cid_nlist = array();

            $cur = count($this->dbcpoc);
            $lst = count($cid_list);
            if($lst > $cur) { // less
                for($i = 0; $i < $cur; $i++) { // update
                    $this->order_model->set_db_data(CPOC, $cid_list[$i], $this->dbcpoc[$i]);
                    array_push($cid_nlist, $cid_list[$i]);
                }
                for($i = $cur; $i < $lst; $i++) { // remove
                    $this->order_model->remove(CPOC, $cid_list[$i]);
                }
            } else if($lst < $cur) { // more
                for($i = 0; $i < $lst; $i++) { // update
                    $this->order_model->set_db_data(CPOC, $cid_list[$i], $this->dbcpoc[$i]);
                    array_push($cid_nlist, $cid_list[$i]);
                }
                for($i = $lst; $i < $cur; $i++) { // add more
                    $new_cid = $this->order_model->set_db_data(CPOC, null, $this->dbcpoc[$i]);
                    array_push($cid_nlist, $new_cid);
                }
            } else { // equal
                for($i = 0; $i < $lst; $i++) { // update
                    $this->order_model->set_db_data(CPOC, $cid_list[$i], $this->dbcpoc[$i]);
                    array_push($cid_nlist, $cid_list[$i]);
                }
            }

            // Create new Customer PO
            $this->create_cpoc($cid_nlist);
            $this->order_model->set_db_data(CPO, $id, $this->dbcpo);
            redirect('cpo', 'refresh');
        }
    }

    public function remove($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }

        $cpos = $this->order_model->get_db_data(CPO, $id);
        foreach(unserialize($cpos[0]['cid']) as $cid) {
            $this->order_model->remove(CPOC, $cid);
        }
        $this->order_model->remove(CPO, $id);
        redirect('cpo', 'refresh');
    }

    //function to handle callbacks
    public function datatable() {
        $this->datatables->select('due_date,ship_date,ship_name,customer_po,id')->from(CPO);
        if ($this->session->userdata['user_auth'] > 1) { // admin, manager
            $data = $this->datatables->gen_list_allact(4, null, null, 'cpo/bol', 'cpo/packing', 'cpo/edit', 'cpo/remove', null); // 3: id
        } else {
            $data = $this->datatables->gen_list_allact(4, null, null, 'cpo/bol', 'cpo/packing', null, null, null); // 3: id
        }
        echo $data;
    }

    private function cpo_print($page, $id) {
        if (!file_exists('application/views/' . $page . '.php')) {
            show_404();
        }

        $data['cpo'] = $this->order_model->get_db_data(CPO, $id);
        $data['cpo'] = $data['cpo'][0];
        $cids = unserialize($data['cpo']['cid']);

        $cid_list = "";
        foreach($cids as $cid) {
            $cid_list = $cid_list . " or `id` = '" . $cid . "'";
        }

        if(!empty($cid_list)) {
            $data['cpocs'] = $this->order_model->get_db_data(CPOC, "0' " . $cid_list . ";#");
            //var_dump($data['cpocs']);
        }

        $this->load->view($page   , $data);
    }

    public function bol($id) {
        return $this->cpo_print('bol', $id);
    }

    public function packing($id) {
        $this->load->view('header');
        return $this->cpo_print('packing', $id);
    }
}

/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */

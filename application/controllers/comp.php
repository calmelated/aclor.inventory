<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

define('COMPANIES', 'companies');

class Comp extends CI_Controller {
    private $dbtable;

    public function __construct() {
        parent::__construct();
        $this->load->model('order_model');
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
    }

    private function show_page($act, $id) {
        $page = ($act != 'list') ? "detail" : "list";
        if (!file_exists('application/views/comp_' . $page. '.php')) {
            show_404();
        }

        $data['act']   = $act; // list or detail_add or detail_edit
        $data['comps'] = ($act == "detail_edit") ? $this->order_model->get_db_data(COMPANIES, $id) : "";

        $this->load->view('header'        ,$data);
        $this->load->view('nav'           ,$data);
        $this->load->view('comp_'.$page   ,$data);
        $this->load->view('footer'        ,$data);
    }

    private function form_verify($id) {
        $this->form_validation->set_rules('name'        , 'Company Name'   , 'trim|required|max_length[32]|xss_clean|callback_check_company['.$id.']');
        $this->form_validation->set_rules('tel'         , 'Telephone'      , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('fax'         , 'FAX'            , 'trim|max_length[16]|xss_clean');
        $this->form_validation->set_rules('contact'     , 'Contact Person' , 'trim|required|max_length[16]|xss_clean');
        $this->form_validation->set_rules('email'       , 'Email'          , 'trim|required|max_length[24]|valid_email|xss_clean');
        $this->form_validation->set_rules('address'     , 'Address'        , 'trim|required|max_length[80]|xss_clean');
        $this->form_validation->set_rules('city'        , 'City, State'     ,'trim|required|max_length[64]|xss_clean');
        if ($this->form_validation->run() == false) {
            return false;
        }
        return true;
    }

    public function check_company($comp_name, $id) {
        $this->load->model('util_model');
        $sql = "select `name` from " . COMPANIES . " where `name` = '" . $this->util_model->str_escape($comp_name) . "'" ;
        if($id != null) {
            $sql = $sql . " and `id` != '" . $id . "'";
        }

        //log_message('error', 'sql: ' . $sql);
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('check_comp_name', 'Duplicate Company Name !! ');
            return false; // duplicate
        } else {
            $this->dbtable = array(
                'name'          => $this->input->post('name', true),
                'tel'           => $this->input->post('tel', true),
                'fax'           => $this->input->post('fax', true),
                'contact'       => $this->input->post('contact', true),
                'email'         => $this->input->post('email', true),
                'address'       => $this->input->post('address', true),
                'city'          => $this->input->post('city', true),
            );
            return true;
        }
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
            $id = $this->order_model->set_db_data(COMPANIES, null, $this->dbtable);
            if($this->input->post('add_next', true) == 1) {
                redirect('comp/add', 'refresh');
            } else {
                redirect('comp', 'refresh');
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
            $this->order_model->set_db_data(COMPANIES, $id, $this->dbtable);
            redirect('comp', 'refresh');
        }
    }

    public function remove($id) {
        if(!($this->session->userdata['user_auth'] > 1)) { // auth:2 admin
            return redirect('noauth', 'refresh');
        }

        $this->order_model->remove(COMPANIES, $id);
        redirect('comp', 'refresh');
    }

    //function to handle callbacks
    public function datatable() {
        $this->datatables->select('name,contact,tel,fax,email,id')->from(COMPANIES);
        if ($this->session->userdata['user_auth'] > 1) { // admin, manager
            $data = $this->datatables->gen_list_act(5, null, 'comp/edit', 'comp/remove', null); // 3: id
        } else {
            $data = $this->datatables->gen_list_act(5, null, null, null, null); // 3: id
        }
        echo $data;
    }

    public function get_comp_info($comp) {
        echo json_encode($this->order_model->get_comp_info($comp));
    }
}

/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */

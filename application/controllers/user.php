<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
insert into users (username, password) values ('bob', MD5('supersecret'));
*/

session_start(); //we need to call PHP's session object to access it through CI

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Captcha parameters:
        $captchaConfig = array(
            'CaptchaId'   => 'FormCaptcha',   // a unique Id for the Captcha instance
            'UserInputId' => 'CaptchaCode'    // Id of the Captcha code input textbox
        );

        // load the BotDetect Captcha library
        $this->load->library('BotDetect/BotDetectCaptcha', $captchaConfig);
        $this->load->model('user_model', '', true);
    }

    public function index($formval = 'true') {
        if ($formval && $this->session->userdata('logged_in')) {
            $this->botdetectcaptcha->Reset();
            redirect(site_url('order'), 'refresh');
        } else {
            // the Captcha is not shown if the user already solved it but validation of
            // other form fields failed
            if (!$this->botdetectcaptcha->IsSolved) {
                $data['captchaSolved'] = false;
                $data['captchaHtml'] = $this->botdetectcaptcha->Html();
            } else {
                $data['captchaSolved'] = true;
                $data['captchaHtml'] = '';
            }

            //If no session, redirect to login page
            $this->load->view('header');
            $this->load->view('login', $data);
            $this->load->view('footer');
        }
    }

    public function login() {
        //This method will have the credentials validation
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        $this->form_validation->set_rules('captcha' , 'Captcha' , 'callback_captcha_validate');

        if ($this->form_validation->run() == false) {
            $this->index(false);
        } else {
            $this->index(true);
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_auth');
        $this->session->unset_userdata('user_name');
        session_destroy();
        redirect(site_url('/'), 'refresh');
    }

    public function check_database($password) {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');

        //query the database
        $result = $this->user_model->login($username, $password);
        if ($result) {
            foreach ($result as $row) {
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('user_id', $row->id);
                $this->session->set_userdata('user_auth', $row->auth);
                $this->session->set_userdata('user_name', $row->username);
            }
            return true;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password !! ');
            return false;
        }
    }

    public function ulist($page = "list") {
        $data['users'] = $this->user_model->get_users(null);
        $this->load->view('header'      ,$data);
        $this->load->view('nav'         ,$data);
        $this->load->view('user_'.$page ,$data);
        $this->load->view('footer'      ,$data);
    }

    public function add() {
        if(!($this->session->userdata['user_auth'] > 2)) { // auth:3 admin
            return redirect('noauth', 'refresh');
        }

        if(!empty($_POST)) { // Posted !!
            $this->form_validation->set_rules('username' , 'Username' , 'trim|required|min_length[3]|max_length[16]|xss_clean|callback_check_username');
            $this->form_validation->set_rules('password' , 'Password' , 'trim|required|min_length[3]|max_length[16]|xss_clean');
            $this->form_validation->set_rules('auth'     , 'Auth'     , 'trim|required|numeric|xss_clean');
            if ($this->form_validation->run() == false) {
                return $this->ulist("detail");
            }

            $this->user_model->set_users();
            if($this->input->post('add_next') == 1) {
                return redirect('user/add', 'refresh');
            } else {
                return $this->ulist("list");
            }
        }
        return $this->ulist("detail");
    }

    public function remove($id) {
        if(!($this->session->userdata['user_auth'] > 2)) { // auth:3 admin
            return redirect('noauth', 'refresh');
        }
        $this->user_model->remove_users($id);
        return $this->ulist("list");
    }

    public function check_username($username) {
        $query = $this->db->select('username')->from(USERS)->where('username', $username)->get();
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('check_username', 'Duplicate Username !! ');
            return false; // duplicate
        } else {
            return true;
        }
    }

    // Captcha validation callback used in form validation
    public function captcha_validate($code) {
        // user considered human if they previously solved the Captcha...
        $isHuman = $this->botdetectcaptcha->IsSolved;
        if (!$isHuman) {
            // ...or if they solved the current Captcha
            $isHuman = $this->botdetectcaptcha->Validate($code);
        }

        // set error if Captcha validation failed
        if (!$isHuman) {
            $this->form_validation->set_message('captcha', 'Please retype the characters from the image correctly.');
        }
        return $isHuman;
    }
}

/* End of file inventory.php */
/* Location: ./application/controllers/inventory.php */

<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

define('USERS', 'users');

class User_model extends CI_Model {
    public function login($username, $password) {
        $this->db->select('id, username, password, auth');
        $this->db->from(USERS);
        $this->db->where('username', $username);
        $this->db->where('password', MD5($password));
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query -> num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function remove_users($id) {
        // remove the record from each tables
        $this->db->where('id', $id)->delete(USERS);
        return $this->db->affected_rows();
    }

    public function set_users($id = null) {
        $data = array(
            'username'  => $this->input->post('username'),
            'password'  => MD5($this->input->post('password')),
            'auth'      => $this->input->post('auth'),
        );

        if($id == null) { // new
            $this->db->insert(USERS, $data);
            return $this->db->insert_id();
        } else { // edit
            $this->db->where('id', $id);
            $this->db->update(USERS, $data);
        }
    }

    public function get_users($id = null) {
        $sql = "select * from `" . USERS . "` ";
        if($id != null) {
            $sql = $sql . "where `id` = '" . $id . "'";
        }
        return $this->db->query($sql)->result_array();
    }
}

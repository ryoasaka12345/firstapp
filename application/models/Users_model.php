<?php
class Users_model extends CI_model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_users()
    {
        $query = $this->db->get('users');
        return $query->result_array();
    }
}

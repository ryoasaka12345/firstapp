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

    public function create_user()
    {   
        /* 
            Helpers, as the name suggests, help you with tasks.
            Each helper file is simply a collection of functions
            in a particular category.

            There are URL Helpers, that assist in creating links,
        */
        $this->load->helper('url');

        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email')
        );

        // runs the query
        return $this->db->insert('users', $data);
    }

}

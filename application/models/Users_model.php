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
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phone_number')
        );

        // runs the query
        return $this->db->insert('users', $data);
    }

    public function update_user($user_id)
    {
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'phone_number' => $this->input->post('phone_number')
        );

        // runs the query
        $this->db->where('id', $user_id); // select
        return $this->db->update('users', $data);
    }

    public function get_user($user_id)
    {
        $query = $this->db->where('id', $user_id)->get('users');
        return $query->row();
    }

    public function delete_user($user_id)
    {
        // DELETE FROM users WHERE id = $user_id
        return $this->db->where('id', $user_id)->delete('users');
    }

    public function delete_users($user_ids)
    {
        return $this->db->where_in('id', $user_ids)->delete('users');
    }
}

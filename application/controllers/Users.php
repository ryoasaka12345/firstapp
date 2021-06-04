<?php
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('users_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('header');

        // view will assign users list by variable named $users
        $data["users"] = $this->users_model->get_users();
        $this->load->view('users/index', $data);

        $this->load->view('footer');
    }

    public function create()
    {

        /* 
            Helpers, as the name suggests, help you with tasks.
            Each helper file is simply a collection of functions
            in a particular category.
        */
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');

        $data["page_title"] = "Create New User";
        /*
            set_rules( arg1, arg2, arg3)
                arg1: The field name
                arg2: A "human name for this field
                arg3: custom error messages
        */
        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header', $data);
            $this->load->view('users/create', $data);
            $this->load->view('footer');
        } else {
            $this->users_model->create_user();
            redirect(base_url('/'));
        }
    }

    public function update($user_id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data["user"] = $this->users_model->get_user($user_id);

        $data["page_title"] = "update User";
        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'First name', 'required');
        $this->form_validation->set_rules('email', 'Email', array('required', 'valid_email'));
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('header', $data);
            $this->load->view('users/update', $data);
            $this->load->view('footer');
        } else {
            $this->users_model->update_user($user_id);
            redirect(base_url('/'));
        }
}
}

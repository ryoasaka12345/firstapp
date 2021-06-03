<?php
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('users_model');
    }

    public function index()
    {
        $this->load->view('header');

        // view will assign users list by variable named $users
        $data["users"] = $this->users_model->get_users();
        $this->load->view('users/index', $data);

        $this->load->view('footer');
    }
}

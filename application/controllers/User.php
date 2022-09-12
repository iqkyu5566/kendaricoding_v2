<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
    }
    public function register()
    {
        $data['title'] = 'Daftar';

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('auth/register', $data);
        } else {
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            $this->session->set_flashdata('user_registered', 'You are now registered and can log in');

            redirect('User/login');
        }
    }
}

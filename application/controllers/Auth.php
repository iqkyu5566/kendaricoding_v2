<?php
class Auth extends CI_Controller
{



    function index()
    {
        $this->load->view('auth/login');
    }

    function cheklogin()
    {
        $email      = $this->input->post('email');
        //$password   = $this->input->post('password');
        $password = $this->input->post('password', TRUE);
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        $test     = password_verify($password, $hashPass);
        // query chek users
        $this->db->where('email', $email);
        //$this->db->where('password',  $test);
        $users       = $this->db->get('tbl_user');
        if ($users->num_rows() > 0) {
            $user = $users->row_array();
            if (password_verify($password, $user['password'])) {
                // retrive user data to session
                $this->session->set_userdata($user);
                redirect('Dashboard');
            } else {
                redirect('Dashboard');
            }
        } else {
            $this->session->set_flashdata('status_login', 'email atau password yang anda input salah');
            redirect('auth');
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('status_login', 'Anda sudah berhasil keluar dari aplikasi');
        redirect('auth');
    }
    function register()
    {
        $this->load->view('auth/register');
    }
    function signup()
    {
        $this->load->view('auth/register/sign-up');
    }
    function daftar()
    {
        // $nama = $this->input->post('name');
        // $email = $this->input->post('email');

        // echo "<pre>";
        // print_r($nama);
        // die;
        // echo "</pre>";
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password')),
            'test' => $this->input->post('test'),
            
            
        );

        $this->db->insert('tbl_daftar1', $data);

        redirect('Auth');
    
    }
}

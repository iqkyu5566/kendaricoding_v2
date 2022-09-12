<?php
class User_model extends CI_Model
{
    public function register($enc_password)
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        );

        return $this->db->insert('user', $data);
    }
}

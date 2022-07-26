<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Daftar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/daftar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/daftar/index/';
            $config['first_url'] = base_url() . 'index.php/daftar/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Daftar_model->total_rows($q);
        $daftar = $this->Daftar_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'daftar_data' => $daftar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','daftar/tbl_daftar_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Daftar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_anggota' => $row->id_anggota,
		'username' => $row->username,
		'nama' => $row->nama,
		'alamat' => $row->alamat,
		'email' => $row->email,
		'password' => $row->password,
	    );
            $this->template->load('template','daftar/tbl_daftar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('daftar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('daftar/create_action'),
	    'id_anggota' => set_value('id_anggota'),
	    'username' => set_value('username'),
	    'nama' => set_value('nama'),
	    'alamat' => set_value('alamat'),
	    'email' => set_value('email'),
	    'password' => set_value('password'),
	);
        $this->template->load('template','daftar/tbl_daftar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
	    );

            $this->Daftar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('daftar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Daftar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('daftar/update_action'),
		'id_anggota' => set_value('id_anggota', $row->id_anggota),
		'username' => set_value('username', $row->username),
		'nama' => set_value('nama', $row->nama),
		'alamat' => set_value('alamat', $row->alamat),
		'email' => set_value('email', $row->email),
		'password' => set_value('password', $row->password),
	    );
            $this->template->load('template','daftar/tbl_daftar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('daftar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_anggota', TRUE));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'email' => $this->input->post('email',TRUE),
		'password' => $this->input->post('password',TRUE),
	    );

            $this->Daftar_model->update($this->input->post('id_anggota', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('daftar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Daftar_model->get_by_id($id);

        if ($row) {
            $this->Daftar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('daftar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('daftar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');

	$this->form_validation->set_rules('id_anggota', 'id_anggota', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-26 05:32:00 */
/* http://harviacode.com */
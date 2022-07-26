<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Pemesanan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/pemesanan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/pemesanan/index/';
            $config['first_url'] = base_url() . 'index.php/pemesanan/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Pemesanan_model->total_rows($q);
        $pemesanan = $this->Pemesanan_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pemesanan_data' => $pemesanan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','pemesanan/tbl_pemesanan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pemesanan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pemesanan' => $row->id_pemesanan,
		'nama_pemesan' => $row->nama_pemesan,
		'email' => $row->email,
		'ket' => $row->ket,
	    );
            $this->template->load('template','pemesanan/tbl_pemesanan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemesanan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pemesanan/create_action'),
	    'id_pemesanan' => set_value('id_pemesanan'),
	    'nama_pemesan' => set_value('nama_pemesan'),
	    'email' => set_value('email'),
	    'ket' => set_value('ket'),
	);
        $this->template->load('template','pemesanan/tbl_pemesanan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_pemesan' => $this->input->post('nama_pemesan',TRUE),
		'email' => $this->input->post('email',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Pemesanan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('pemesanan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pemesanan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pemesanan/update_action'),
		'id_pemesanan' => set_value('id_pemesanan', $row->id_pemesanan),
		'nama_pemesan' => set_value('nama_pemesan', $row->nama_pemesan),
		'email' => set_value('email', $row->email),
		'ket' => set_value('ket', $row->ket),
	    );
            $this->template->load('template','pemesanan/tbl_pemesanan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemesanan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pemesanan', TRUE));
        } else {
            $data = array(
		'nama_pemesan' => $this->input->post('nama_pemesan',TRUE),
		'email' => $this->input->post('email',TRUE),
		'ket' => $this->input->post('ket',TRUE),
	    );

            $this->Pemesanan_model->update($this->input->post('id_pemesanan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pemesanan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pemesanan_model->get_by_id($id);

        if ($row) {
            $this->Pemesanan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pemesanan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pemesanan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_pemesan', 'nama pemesan', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('ket', 'ket', 'trim|required');

	$this->form_validation->set_rules('id_pemesanan', 'id_pemesanan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_pemesanan.xls";
        $judul = "tbl_pemesanan";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Pemesan");
	xlsWriteLabel($tablehead, $kolomhead++, "Email");
	xlsWriteLabel($tablehead, $kolomhead++, "Ket");

	foreach ($this->Pemesanan_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_pemesan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->email);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ket);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Pemesanan.php */
/* Location: ./application/controllers/Pemesanan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-18 08:47:08 */
/* http://harviacode.com */
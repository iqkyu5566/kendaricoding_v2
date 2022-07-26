<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Testimoni_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/testimoni/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/testimoni/index/';
            $config['first_url'] = base_url() . 'index.php/testimoni/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Testimoni_model->total_rows($q);
        $testimoni = $this->Testimoni_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'testimoni_data' => $testimoni,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','testimoni/tbl_testimoni_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Testimoni_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_testimoni' => $row->id_testimoni,
		'pesan' => $row->pesan,
		'penulis' => $row->penulis,
	    );
            $this->template->load('template','testimoni/tbl_testimoni_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('testimoni'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('testimoni/create_action'),
	    'id_testimoni' => set_value('id_testimoni'),
	    'pesan' => set_value('pesan'),
	    'penulis' => set_value('penulis'),
	);
        $this->template->load('template','testimoni/tbl_testimoni_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'pesan' => $this->input->post('pesan',TRUE),
		'penulis' => $this->input->post('penulis',TRUE),
	    );

            $this->Testimoni_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success 2');
            redirect(site_url('testimoni'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Testimoni_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('testimoni/update_action'),
		'id_testimoni' => set_value('id_testimoni', $row->id_testimoni),
		'pesan' => set_value('pesan', $row->pesan),
		'penulis' => set_value('penulis', $row->penulis),
	    );
            $this->template->load('template','testimoni/tbl_testimoni_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('testimoni'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_testimoni', TRUE));
        } else {
            $data = array(
		'pesan' => $this->input->post('pesan',TRUE),
		'penulis' => $this->input->post('penulis',TRUE),
	    );

            $this->Testimoni_model->update($this->input->post('id_testimoni', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('testimoni'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Testimoni_model->get_by_id($id);

        if ($row) {
            $this->Testimoni_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('testimoni'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('testimoni'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');
	$this->form_validation->set_rules('penulis', 'penulis', 'trim|required');

	$this->form_validation->set_rules('id_testimoni', 'id_testimoni', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "tbl_testimoni.xls";
        $judul = "tbl_testimoni";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Pesan");
	xlsWriteLabel($tablehead, $kolomhead++, "Penulis");

	foreach ($this->Testimoni_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pesan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->penulis);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

}

/* End of file Testimoni.php */
/* Location: ./application/controllers/Testimoni.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2022-07-18 09:12:33 */
/* http://harviacode.com */
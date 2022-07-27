<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_pages');
		$this->load->model('Testimoni_model');
	}

	public function index()
	{
		// $this->load->view('depan/v_isi.php');
		$data = array(
			'title' => 'Halaman Home'
		);

		$data['data_testimoni']		= $this->Testimoni_model->get_all();
		// $data['data_deskripsi']	= $this->M_pages->get_deskripsi_company()->row_array();

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
		// die;

		$this->template->load('template_web', 'depan/v_isi', $data);

		// var_dump($data);
		// die;
	}
}

/* End of file Home.php */
/* Location: ./application/controllers/front/Home.php */
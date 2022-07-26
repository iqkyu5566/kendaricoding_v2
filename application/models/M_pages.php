<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pages extends CI_Model
{

	public function get_judul_company($cat_pages = "pages", $tulisan_judul = "judul_company")
	{
		// $this->db->order_by('tulisan_id', 'desc');
		// $this->db->where('tbl_tulisan.tulisan_kategori_nama', $cat_pages);
		// $this->db->where('tbl_tulisan.tulisan_judul', $tulisan_judul);
		// $query = $this->db->get('tbl_tulisan');
		return $query;
	}

	public function get_deskripsi_company($cat_pages = "pages", $tulisan_judul = "deskripsi_company")
	{
		// $this->db->order_by('tulisan_id', 'desc');
		// $this->db->where('tbl_tulisan.tulisan_kategori_nama', $cat_pages);
		// $this->db->where('tbl_tulisan.tulisan_judul', $tulisan_judul);
		// $query = $this->db->get('tbl_tulisan');
		return $query;
	}
}

/* End of file M_pages.php */
/* Location: ./application/models/M_pages.php */
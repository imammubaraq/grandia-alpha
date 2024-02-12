<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_kategori extends CI_Model
{
	public function elektronik()
	{
		return $this->db->get_where('product', array('kategori' => 'Laminasi Cover'));
	}

	public function shirt()
	{
		return $this->db->get_where('product', array('kategori' => 'Ukuran Buku'));
	}

	public function shoes()
	{
		return $this->db->get_where('product', array('kategori' => 'Bahan Cover'));
	}

	public function jacket()
	{
		return $this->db->get_where('product', array('kategori' => 'Finishing'));
	}

	public function kids()
	{
		return $this->db->get_where('product', array('kategori' => 'Bahan Isi'));
	}

	public function fashion()
	{
		return $this->db->get_where('product', array('kategori' => 'Spek Cetak'));
	}
}

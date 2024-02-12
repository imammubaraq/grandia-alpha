<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{
    public function laminasi_cover()
    {
        $data['title'] = 'Laminasi Cover';
        $data['elektronik'] = $this->model_kategori->elektronik()->result();
        $this->load->view('layout/home/header', $data);
        $this->load->view('laminasi_cover', $data);
        $this->load->view('layout/home/footer');
    }

    public function ukuran_buku()
    {
        $data['title'] = 'Ukuran Buku Categories';
        $data['shirt'] = $this->model_kategori->shirt()->result();
        $this->load->view('layout/home/header', $data);
        $this->load->view('ukuran_buku', $data);
        $this->load->view('layout/home/footer');
    }

    public function bahan_cover()
    {
        $data['title'] = 'Bahan Cover';
        $data['shoes'] = $this->model_kategori->shoes()->result();
        $this->load->view('layout/home/header', $data);
        $this->load->view('bahan_cover', $data);
        $this->load->view('layout/home/footer');
    }

    public function finishing()
    {
        $data['title'] = 'Finishing';
        $data['jacket'] = $this->model_kategori->jacket()->result();
        $this->load->view('layout/home/header', $data);
        $this->load->view('finishing', $data);
        $this->load->view('layout/home/footer');
    }

    public function bahan_isi()
    {
        $data['title'] = 'Bahan Isi';
        $data['kids'] = $this->model_kategori->kids()->result();
        $this->load->view('layout/home/header', $data);
        $this->load->view('bahan_isi', $data);
        $this->load->view('layout/home/footer');
    }

    public function spek_cetak()
    {
        $data['title'] = 'Spek Cetak';
        $data['fashion'] = $this->model_kategori->fashion()->result();
        $this->load->view('layout/home/header', $data);
        $this->load->view('spek_cetak', $data);
        $this->load->view('layout/home/footer');
    }
}

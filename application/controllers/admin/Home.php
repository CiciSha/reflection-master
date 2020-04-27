<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mmember');
		$this->load->model('admin/Mpemesanan');
		$this->load->model('admin/Mpaket');
	}

	public function index()
	{
		$paket = $this->Mpaket->getAllPaket();
		foreach ($paket as $key => $value) 
		{
			$pemesanan = $this->Mpemesanan->hitung_pemesanan($value['id_paket']);
			$pemesanan['nama_paket'] = $value['nama_paket'];
			$data['pemesanan'][] = $pemesanan;
		}

		$this->load->view('admin/template/Header');
		$this->load->view('admin/Home',$data);
		$this->load->view('admin/template/Footer');
	}

	function logout()
	{
		session_destroy();
		redirect('login','refresh');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mpaket');
		$this->load->model('admin/Mpemesanan');
		$this->load->model('member/Mmember');
		$this->load->model('admin/Mportofolio');
	}

	
	function detail_paket($id_paket)
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$data['detail_paket'] = $this->Mpaket->ambil_detail_paket($id_paket);
		$this->load->view('member/template/Header',$data);
		$this->load->view('member/detail_paket', $data);
		$this->load->view('member/template/Footer');
	}

}

/* End of file Paket.php */
/* Location: ./application/controllers/Paket.php */
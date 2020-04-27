<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	public function index()
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/panduan',$data);
		$this->load->view('member/template/Footer');
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */
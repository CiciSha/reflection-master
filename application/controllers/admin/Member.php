<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mmember');
	}

	public function index()
	{
		$data ['member'] = $this->Mmember->tampil_member();

		$this->load->view('admin/template/Header');
		$this->load->view('admin/Member', $data);
		$this->load->view('admin/template/Footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */
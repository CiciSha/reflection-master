<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mportofolio');
		$this->load->model('admin/Mpaket');
	}

	public function index()
	{
		$data ['portofolio'] = $this->Mportofolio->tampil_portofolio();
		$this->load->view('admin/template/Header');
		$this->load->view('admin/portofolio/Tampil_portofolio', $data);
		$this->load->view('admin/template/Footer');

	}

	public function tampil_edit_portofolio($id_portofolio)
	{
		
		$input = $this->input->post();
		if ($input) 
		{
			$this->Mportofolio->ubah_portofolio($input,$id_portofolio);
			redirect('admin/portofolio','refresh');
		}
		$data ['portofolio'] = $this->Mportofolio->ambil_portofolio($id_portofolio);
		$this->load->view('admin/template/Header');
		$this->load->view('admin/portofolio/Edit_portofolio',$data);
		$this->load->view('admin/template/Footer');
	}

	public function tampil_tambah_portofolio()
	{
		// $data ['portofolio'] = $this->Mportofolio->tampil_portofolio();
		$input = $this->input->post();
		if ($input)
		{
			$this->Mportofolio->simpan_portofolio($input);
			redirect('admin/portofolio','refresh');
		}
		$data['paket'] = $this->Mpaket->getAllPaket();
		$this->load->view('admin/template/Header');
		$this->load->view('admin/portofolio/Tambah_portofolio',$data);
		$this->load->view('admin/template/Footer');
	}

	// function edit_portofolio($id_portofolio)
	// {

	// 	$input = $this->input->post();
	// 	if ($input) 
	// 	{
	// 		$this->Mportofolio->ubah_portofolio($input,$id_portofolio);
	// 		redirect('admin/portofolio','refresh');
	// 	}

	// 	$data ['portofolio'] = $this->Mportofolio->ambil_portofolio($id_portofolio);
	
	// 	$this->load->view('admin/template/Header');
	// 	$this->load->view('admin/portofolio/Edit_portofolio',$data);
	// 	$this->load->view('admin/template/Footer');

	// }



}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */
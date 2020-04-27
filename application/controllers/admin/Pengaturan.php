<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mpengaturan');
	}

	public function index()
	{
		$data['pengaturan'] = $this->Mpengaturan->tampil_pengaturan();

		$this->load->view('admin/template/header');
		$this->load->view('admin/pengaturan/tampil',$data);
		$this->load->view('admin/template/footer');
	}
	function ubah($id_pengaturan)
	{
		$input = $this->input->post();
		if ($input) 
		{
			$this->Mpengaturan->ubah_pengaturan($id_pengaturan,$input);
			redirect('admin/pengaturan','refresh');
		}

		$data['pengaturan'] = $this->Mpengaturan->ambil_pengaturan($id_pengaturan);

		$this->load->view('admin/template/header');
		$this->load->view('admin/pengaturan/ubah',$data);
		$this->load->view('admin/template/footer');
	}
	public function tampil_edit_pengaturan($id_pengaturan)
	{
		
		$input = $this->input->post();
		if ($input) 
		{
			$this->Mpengaturan->ubah_pengaturan($input,$id_pengaturan);
			redirect('admin/pengaturan','refresh');
		}
		$data ['pengaturan'] = $this->Mpengaturan->ambil_pengaturan($id_pengaturan);
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pengaturan/ubah',$data);
		$this->load->view('admin/template/Footer');
	}

	public function tambah()
	{
		
		$input = $this->input->post();
		if ($input)
		{
			$this->Mpengaturan->simpan_pengaturan($input);
			redirect('admin/pengaturan','refresh');
		}
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pengaturan/tambah');
		$this->load->view('admin/template/Footer');
	}
	function ubah_password()
	{
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pengaturan/ubah_password');
		$this->load->view('admin/template/Footer');
		$input = $this->input->post();
		if ($input)
		{
			$this->Mpengaturan->ubah_password($input);
		}

	}


}

/* End of file Pengaturan.php */
/* Location: ./application/controllers/admin/Pengaturan.php */
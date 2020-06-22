<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

	function __construct()

	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mpaket');
		$this->load->library('form_validation');
		$this->load->helper('url_helper');
		$this->load->model('admin/Mstudio');
	}

	public function index()
	{
		$data ['paket'] = $this->Mpaket->getAllPaket();

		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/Tampil_paket', $data);
		$this->load->view('admin/template/Footer');
	}

	public function tambah_paket()
	{
		$input = $this->input->post();

		if ($input) 
		{
			$this->form_validation->set_rules('nama_paket', 'Paket', 'is_unique[paket.nama_paket]');

			$this->form_validation->set_message('is_unique',' %s Sudah Terdaftar');

			if ($this->form_validation->run() == TRUE ) 
			{
				$this->Mpaket->simpan_paket($input);
				echo "<script>alert('Data berhasil ditambahkan!');</script>";
				redirect('admin/paket','refresh');
			} 
			else
			{
				$data['kosong'] = form_error();
			}
		}

		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/Tambah_paket');
		$this->load->view('admin/template/Footer');

	}

	public function tampil_detail_paket($id_paket)
	{
		$data ['tipe_paket'] = $this->Mpaket->ambil_detail_paket($id_paket);
		$data['id_paket']=$id_paket;
		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/Tampil_detail', $data);
		$this->load->view('admin/template/Footer');

	}

	public function form_detail_paket($id_paket)
	{
		$input = $this->input->post();
		if ($input) 
		{
			$this->form_validation->set_rules('nama_tipe_paket', 'Tipe Paket', 'is_unique[tipe_paket.nama_tipe_paket]');

			$this->form_validation->set_message('is_unique',' %s Sudah Terdaftar');
			if ($this->form_validation->run() == TRUE) 
			{
				$this->Mpaket->simpan_detail_paket($input,$id_paket);
				echo "<script>alert('Data berhasil ditambahkan!');</script>";
				redirect("admin/paket/tampil_detail_paket/$id_paket",'refresh');
			} 
			else
			{
				$data['kosong'] = form_error();
			}
		}

		$data['paket'] = $this->Mpaket->ambil_paket($id_paket);
		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/Tambah_detail_paket',$data);
		$this->load->view('admin/template/Footer');

	}

	function tampil_edit_paket($id_paket)
	{

		$input = $this->input->post();
		if ($input) 
		{
			$this->Mpaket->ubah_paket($input,$id_paket);
			echo "<script>alert('Data berhasil diubah!');</script>";
			redirect('admin/paket','refresh');
		}

		$data ['paket'] = $this->Mpaket->ambil_paket($id_paket);
		
		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/Edit_paket',$data);
		$this->load->view('admin/template/Footer');

	}

	function edit_detail_paket($id_tipe_paket)
	{
		$data ['tipe_paket'] = $this->Mpaket->ambil_tipe_paket($id_tipe_paket);
		$input = $this->input->post();
		if ($input) 
		{
			$id_paket = $data['tipe_paket']['id_paket'];
			$this->Mpaket->ubah_tipe_paket($input,$id_tipe_paket);
			echo "<script>alert('Data berhasil diubah!');</script>";
			redirect("admin/paket/tampil_detail_paket/$id_paket",'refresh');
		} 
		$data ['id_paket'] = $data['tipe_paket']['id_paket'];

		
		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/Edit_detail_paket',$data);
		$this->load->view('admin/template/Footer');
	}
	function studio($id_tipe_paket)
	{

		$input = $this->input->post();
		if ($input) 
		{
			$this->Mpaket->simpan_paket_studio($id_tipe_paket,$input);
			redirect('admin/paket','refresh');
		}

		$data['studio'] = $this->Mstudio->tampil_studio();
		$data['paket'] = $this->Mpaket->ambil_tipe_paket($id_tipe_paket);
		// echo "<pre>";
		// print_r ($data['paket']);
		// echo "</pre>";
		$data['paket_studio'] = $this->Mpaket->ambil_paket_studio($id_tipe_paket);

		$this->load->view('admin/template/Header');
		$this->load->view('admin/paket/studio',$data);
		$this->load->view('admin/template/Footer');
	}

	function hapus($id_paket)
	{
		$this->Mpaket->hapus_paket($id_paket);
		redirect('admin/paket','refresh');
	}

}

/* End of file Paket.php */
/* Location: ./application/controllers/admin/Paket.php */
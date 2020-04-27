<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studio extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mstudio');	
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data ['studio'] = $this->Mstudio->tampil_studio();
		$this->load->view('admin/template/Header');
		$this->load->view('admin/studio/Tampil_studio', $data);
		$this->load->view('admin/template/Footer');

	}

	public function tambah()
	{
		$input = $this->input->post();

		if ($input) 
		{
			$this->form_validation->set_rules('nama_studio', 'Studio', 'is_unique[studio.nama_studio]');

			$this->form_validation->set_message('is_unique','%s sudah Terdaftar');
			if ($this->form_validation->run() == TRUE )
			{
				$this->Mstudio->simpan_studio($input);
				redirect('admin/studio','refresh');
			}
		}

		$this->load->view('admin/template/Header');
		$this->load->view('admin/studio/Tambah_studio');
		$this->load->view('admin/template/Footer');

	}

	public function tampil_detail_studio($id_studio)
	{
		$data ['detail_studio'] = $this->Mstudio->get_detail_studio($id_studio);
		$data['id_studio'] = $id_studio;
		$this->load->view('admin/template/Header');
		$this->load->view('admin/studio/Tampil_detail_studio', $data);
		$this->load->view('admin/template/Footer');

	}

	public function tambah_detail_studio($id_studio)
	{
		$input = $this->input->post();
		if ($input) 
		{
			// $this->form_validation->set_rules('nama_background', 'Nama Background', 'is_unique[detail_studio.nama_background]');

			// $this->form_validation->set_message('is_unique','%s sudah Terdaftar');
			// if ($this->form_validation->run() == TRUE ) 
			// {
				$this->Mstudio->simpan_detail_studio($input, $id_studio);
				redirect("admin/studio/Tampil_detail_studio/$id_studio",'refresh');
			// } 
		}
		
		$this->load->view('admin/template/Header');
		$this->load->view('admin/studio/Tambah_detail_studio');
		$this->load->view('admin/template/Footer');

	}
	
	function edit_studio($id_studio)
	{
		$data ['studio'] = $this->Mstudio->ambil_studio($id_studio);
		$input = $this->input->post();
		if ($input) 
		{
			// $id_paket = $data['tipe_paket']['id_paket'];
			$this->Mstudio->ubah_studio($input,$id_studio);
			redirect("admin/studio",'refresh');
		} 

		$this->load->view('admin/template/Header');
		$this->load->view('admin/studio/Edit_studio',$data);
		$this->load->view('admin/template/Footer');
	}
	function edit_detail_studio($id_detail_studio)
	{
			$data ['detail_studio'] = $this->Mstudio->ambil_detail_studio($id_detail_studio);
			$input = $this->input->post();
			if ($input) 
			{
				$id_studio = $data['detail_studio']['id_studio'];
				$this->Mstudio->ubah_detail_studio($input,$id_detail_studio);
				redirect("admin/studio/tampil_detail_studio/$id_studio",'refresh');
			}
			 // TAMBAHAN CICI YANG MASIH EROR
			$data ['id_studio'] = $data['detail_studio']['id_studio'];


			$this->load->view('admin/template/Header');
			$this->load->view('admin/studio/edit_detail_studio',$data);
			$this->load->view('admin/template/Footer');
	}

	

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */
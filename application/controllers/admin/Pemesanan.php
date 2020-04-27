<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin'))
		{
			redirect('login','refresh');
		}
		$this->load->model('admin/Mpemesanan');	
		$this->load->model('admin/Mpengaturan');
	}

	public function index()
	{
		$data ['pemesanan'] = $this->Mpemesanan->tampil_pemesanan();
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/Tampil_pemesanan', $data);
		$this->load->view('admin/template/Footer');
		
	}
	function reschedule($id_pemesanan)
	{
		$data['pemesanan'] = $this->Mpemesanan->ambil_pemesanan($id_pemesanan);
		$input = $this->input->post();
		if($input)
		{
			$this->Mpemesanan->reschedule($input,$id_pemesanan);
			redirect('admin/pemesanan','refresh');
		}
		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/reschedule', $data);
		$this->load->view('admin/template/Footer');
	}
	function selesai($id_pemesanan)
	{
		$data['status_pemesanan'] = "Selesai";

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $data);
		redirect('admin/pemesanan','refresh');
	}
	function dp($id_pemesanan)
	{
		$data['pembayaran'] = $this->Mpemesanan->ambil_pembayaran($id_pemesanan);
		$data['id_pemesanan'] = $id_pemesanan;

		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/pembayaran', $data);
		$this->load->view('admin/template/Footer');
	}
	function konfirmasi_dp($id_pemesanan)
	{
		$data['tanggal_konfirmasi'] = date("Y-m-d");

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pembayaran', $data);

		$pemesanan['status_pemesanan'] = "DP";

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $pemesanan);

		redirect('admin/pemesanan','refresh');
	}
	function konfirmasi_lunas($id_pembayaran,$id_pemesanan)
	{
		$data['tanggal_konfirmasi'] = date("Y-m-d");
		
		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pembayaran', $data);

		$pemesanan['status_pemesanan'] = "Proses";

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $pemesanan);

		redirect('admin/pemesanan','refresh');
	}
	function detail($id_pemesanan)
	{
		$input = $this->input->post();
		if ($input) 
		{
			$this->Mpemesanan->ubah_pemesanan($input,$id_pemesanan);
			redirect('admin/pemesanan','refresh');
		}

		$data['pemesanan'] = $this->Mpemesanan->ambil_pemesanan($id_pemesanan);

		$data['pembayaran'] = $this->Mpemesanan->ambil_pembayaran($id_pemesanan);

		$data['pose'] = $this->Mpengaturan->ambil_pengaturan(2);
		$data['file'] = $this->Mpengaturan->ambil_pengaturan(3);

		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/detail', $data);
		$this->load->view('admin/template/Footer');
	}
	function detail_pembayaran($id_pemesanan)
	{
		$data['detail_pembayaran'] = $this->Mpemesanan->ambil_pembayaran_pemesanan($id_pemesanan);

		$this->load->view('admin/template/Header');
		$this->load->view('admin/pemesanan/detail_pembayaran', $data);
		$this->load->view('admin/template/Footer');
	}

}

/* End of file Paket.php */
/* Location: ./application/controllers/admin/Paket.php */
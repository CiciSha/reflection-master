<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();
		$this->load->model('admin/Mpemesanan');
		$data_pemesanan = $this->Mpemesanan->tampil_pemesanan();
		$data['testimoni'] = $this->Mpemesanan->tampil_testimoni();


		foreach ($data_pemesanan as $key => $value) 
		{
			
			$pesan = date("Y-m-d", strtotime('+1 days', strtotime($value['tanggal_pemesanan'])));

			if (date("Y-m-d") >= $pesan AND $value['status_pemesanan']=="Pending") 
			{
				$status['status_pemesanan'] = "Cancel";
				$this->db->where('tanggal_pemesanan', $value['tanggal_pemesanan']);
				$this->db->where('status_pemesanan', "Pending");
				$this->db->update('pemesanan', $status);
			}
		}
		$this->load->view('member/template/Header',$data);
		$this->load->view('member/Home',$data);
		$this->load->view('member/template/Footer');
	}

	public function tentangKami()
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/Tentang');
		$this->load->view('member/template/Footer');
	}
	function logout()
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();
		
		session_destroy();
		redirect('home','refresh');
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */
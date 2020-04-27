<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "./phpmailer/PHPMailerAutoload.php";

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mpengaturan');
		$this->load->model('admin/Mpaket');
		$this->load->model('admin/Mstudio');
	}

	public function paket($id_tipe_paket)
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$input = $this->input->post();
		if ($input) 
		{
			$this->Mpaket->simpan_reservasi_paket($input);

			echo "<script>alert('Lakukan Pembayaran Dalam Waktu 1x24 jam')</script>";
			redirect('member/riwayat','refresh');
		}

		$data['tipe_paket'] = $this->Mpaket->ambil_tipe_paket($id_tipe_paket);
		$data['paket'] = $this->Mpaket->getAllPaket();
		
		$data['detail_paket'] = $this->Mpaket->ambil_detail_paket($data['tipe_paket']['id_paket']);

		$data['studio'] = $this->Mpaket->ambil_paket_studio($id_tipe_paket);

		$data['pengaturan'] = $this->Mpengaturan->tampil_pengaturan();

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/Pemesanan',$data);
		$this->load->view('member/template/Footer');
	}

	
}

/* End of file Home.php */
/* Location: ./application/controllers/member/Home.php */
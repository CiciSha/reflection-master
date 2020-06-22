<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require "./phpmailer/PHPMailerAutoload.php";

class Member extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mpaket');
		$this->load->model('admin/Mpemesanan');
		$this->load->model('member/Mmember');
		$this->load->model('admin/Mportofolio');
	}

	public function index()
	{

		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();
		
		// $data['pemesanan'] = $this->Mpemesanan->tampil_pemesanan_member($_SESSION['member']['id_member']);

		$data_pemesanan = $this->Mpemesanan->tampil_pemesanan();
		
		foreach ($data_pemesanan as $key => $value) 
		{
			$pesan = date("Y-m-d", strtotime('+1 days', strtotime($value['tanggal_pemesanan'])));

			if (date("Y-m-d") >= $pesan AND $value['status_pemesanan']=="Pending") 
			{
				echo "Cancel";
				$status['status_pemesanan'] = "Cancel";
				$this->db->where('tanggal_pemesanan', $value['tanggal_pemesanan']);
				$this->db->where('status_pemesanan', "Pending");
				$this->db->update('pemesanan', $status);
			}
		}

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/member',$data);
		$this->load->view('member/template/Footer');
		
	}
	function riwayat()
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();
		
		$data['pemesanan'] = $this->Mpemesanan->tampil_pemesanan_member($_SESSION['member']['id_member']);

		$data_pemesanan = $this->Mpemesanan->tampil_pemesanan();
		
		foreach ($data_pemesanan as $key => $value) 
		{
			$pesan = date("Y-m-d", strtotime('+1 days', strtotime($value['tanggal_pemesanan'])));

			if (date("Y-m-d") >= $pesan AND $value['status_pemesanan']=="Pending") 
			{
				echo "Cancel";
				$status['status_pemesanan'] = "Cancel";
				$this->db->where('tanggal_pemesanan', $value['tanggal_pemesanan']);
				$this->db->where('status_pemesanan', "Pending");
				$this->db->update('pemesanan', $status);
			}

		}
		$this->load->view('member/template/Header',$data);
		$this->load->view('member/riwayat',$data);
		$this->load->view('member/template/Footer');
	}

	function pembayaran($id_pemesanan)
	{
		
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$input = $this->input->post();
		if ($input)
		{
			$this->Mpemesanan->simpan_pembayaran($input,$id_pemesanan);
			redirect('member/riwayat','refresh');

		}
		$data['pemesanan'] = $this->Mpemesanan->ambil_pemesanan($id_pemesanan);

		$data['tipe_paket'] = $this->Mpaket->ambil_tipe_paket($data['pemesanan']['id_tipe_paket']);

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/Konfirmasi',$data);
		$this->load->view('member/template/Footer');
	}
	function ubah_password()
	{
		$input = $this->input->post();
		$id_member = $_SESSION['member']['id_member'];

		if (empty($input['password'])) 
		{
			$this->Mmember->ubah_member($input,$id_member);
		} 
		else 
		{
			$this->Mmember->ubah_password($input,$id_member);
		}
		
		redirect('member','refresh');
	}
	function lupa_password()
	{
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/lupa_password');
		$this->load->view('member/template/Footer');
	}
	function cek_email()
	{
		$id_member = $this->Mmember->cek_email($_POST['email']);
		echo $id_member;
	}

	function testimoni($id_pemesanan)
	{
		$input = $this->input->post();
		if ($input)
		{
			$this->Mpemesanan->simpan_testimoni($input,$id_pemesanan);
			echo "<script>alert('Testimoni Berhasil Disimpan');</script>";
			redirect('home','refresh');
		}

		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();

		$data['pemesanan'] = $this->Mpemesanan->ambil_pemesanan($id_pemesanan);

		$this->load->view('member/template/Header',$data);
		$this->load->view('member/testimoni',$data);
		$this->load->view('member/template/Footer');
	}
	function detail_portofolio($id_paket)	
	{
		$data['portofolio'] = $this->Mportofolio->tampil_portofolio_paket($id_paket);
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();
		
		$this->load->view('member/template/Header',$data);
		$this->load->view('member/portofolio',$data);
		$this->load->view('member/template/Footer');

	}
	// CICI BUAT RESCHEDULE MEMBER
	function reschedule($id_pemesanan)
	{
		$data['pemesanan'] = $this->Mpemesanan->ambil_pemesanan($id_pemesanan);
		// $this->load->model('admin/Mpaket');
		$this->load->model('admin/Mpaket');
		$data['paket'] = $this->Mpaket->getAllPaket();
		$input = $this->input->post();
		if($input)
		{
			$this->Mpemesanan->reschedule($input,$id_pemesanan);
			echo "<script>alert('Data Berhasil Diubah!');</script>";
			redirect('member/riwayat','refresh');
		}
		$this->load->view('member/template/Header',$data);
		$this->load->view('member/reschedule', $data);
		$this->load->view('member/template/Footer');
	}
	

}

/* End of file Member.php */
/* Location: ./application/controllers/Member.php */
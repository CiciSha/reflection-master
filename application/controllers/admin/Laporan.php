<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mlaporan');
	}

	public function harian()
	{
		$data=array();
		$input = $this->input->post();
		if ($input) 
		{
			$data['harian'] = $this->Mlaporan->laporan_harian($input);
		}

		$this->load->view('admin/template/Header');
		$this->load->view('admin/laporan/harian',$data);
		$this->load->view('admin/template/Footer');
	}
	function mingguan()
	{
		$data=array();
		$input = $this->input->post();
		if ($input) 
		{
			$data['mingguan'] = $this->Mlaporan->laporan_mingguan($input);
		}

		$this->load->view('admin/template/Header');
		$this->load->view('admin/laporan/mingguan',$data);
		$this->load->view('admin/template/Footer');
	}
	function bulanan()
	{
		$data=array();
		$input = $this->input->post();

		if ($input) 
		{
			$data['bulanan'] = $this->Mlaporan->laporan_bulanan($input);
		}

		$this->load->view('admin/template/header');
		$this->load->view('admin/laporan/bulanan',$data);
		$this->load->view('admin/template/Footer');
	}
	function tahunan()
	{
		$data=array();
		$input = $this->input->post();

		if ($input) 
		{
			$data['tahunan'] = $this->Mlaporan->laporan_tahunan($input);
		}

		$this->load->view('admin/template/header');
		$this->load->view('admin/laporan/tahunan',$data);
		$this->load->view('admin/template/Footer');
	}
	function cetak_harian($tanggal)
	{
		$data['harian'] = $this->Mlaporan->laporan_cetak_harian($tanggal);

		$data['tanggal'] = $tanggal;
		$this->load->view('admin/laporan/cetak_harian', $data);
	}
	function cetak_mingguan($tanggal_awal, $tanggal_akhir)
	{
		$data['mingguan'] = $this->Mlaporan->laporan_cetak_mingguan($tanggal_awal, $tanggal_akhir);

		// $data['tanggal'] = $tanggal;
		$this->load->view('admin/laporan/cetak_mingguan', $data);
	}
	function cetak_bulanan($bulan, $tahun)
	{
		$data['bulanan'] = $this->Mlaporan->laporan_cetak_bulanan($bulan, $tahun);

		$this->load->view('admin/laporan/cetak_bulanan', $data);
	}
	function cetak_tahunan($tahun)
	{
		$data['tahunan'] = $this->Mlaporan->laporan_cetak_tahunan($tahun);

		$this->load->view('admin/laporan/cetak_tahunan', $data);
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/admin/Laporan.php */
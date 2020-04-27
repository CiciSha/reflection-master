<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlaporan extends CI_Model {
	function laporan_harian($input)
	{
		$status = 'Selesai';
		$this->db->join('member', 'pemesanan.id_member = member.id_member');
		$this->db->where('tanggal_pemesanan', $input['tanggal']);
		$this->db->where('status_pemesanan', $status);
		$ambil = $this->db->get('pemesanan');
		return $ambil->result_array();
	}
	function laporan_cetak_harian($tanggal)
	{
		$status = 'Selesai';
		$this->db->join('member', 'pemesanan.id_member = member.id_member');
		$this->db->where('tanggal_pemesanan', $tanggal);
		$this->db->where('status_pemesanan', $status);
		$ambil = $this->db->get('pemesanan');
		return $ambil->result_array();
	}
	function laporan_mingguan($input)
	{
		$status =  'Selesai';
		$awal = $input['tanggal_awal'];
		$akhir = $input['tanggal_akhir'];

		$ambil = $this->db->query("SELECT * FROM pemesanan JOIN member ON pemesanan.id_member=member.id_member WHERE tanggal_pemesanan BETWEEN '$awal' AND '$akhir' AND status_pemesanan = '$status'");
		return $ambil->result_array();
	}
	function laporan_cetak_mingguan($tanggal_awal, $tanggal_akhir)
	{
		$status =  'Selesai';
		$ambil = $this->db->query("SELECT * FROM pemesanan LEFT JOIN member ON pemesanan.id_member = member.id_member WHERE tanggal_pemesanan BETWEEN '$tanggal_awal' AND '$tanggal_akhir' AND status_pemesanan = '$status'" );
		return $ambil->result_array();
	}
	function laporan_bulanan($input)
	{
		$status =  'Selesai';
		$bulan = $input['bulan'];
		$tahun = $input['tahun'];

		$ambil = $this->db->query("SELECT * FROM pemesanan JOIN member ON pemesanan.id_member=member.id_member
			WHERE MONTH(tanggal_pemesanan)='$bulan' AND YEAR(tanggal_pemesanan)='$tahun' AND status_pemesanan = '$status'");
		return $ambil->result_array();
	}
	function laporan_cetak_bulanan($bulan, $tahun)
	{
		$status =  'Selesai';
		$ambil = $this->db->query("SELECT * FROM pemesanan LEFT JOIN member ON pemesanan.id_member = member.id_member WHERE MONTH (tanggal_pemesanan) = '$bulan' AND YEAR (tanggal_pemesanan) = '$tahun' AND status_pemesanan = '$status'");
		return $ambil->result_array();
	}
	function laporan_tahunan($input)
	{
		$status =  'Selesai';
		$tahun = $input['tahun'];

		$ambil = $this->db->query("SELECT * FROM pemesanan JOIN member ON pemesanan.id_member=member.id_member WHERE YEAR(tanggal_pemesanan)='$tahun' AND status_pemesanan = '$status'");
		return $ambil->result_array();
	}
	function laporan_cetak_tahunan($tahun)
	{
		$status =  'Selesai';
		$ambil = $this->db->query("SELECT * FROM pemesanan LEFT JOIN member ON pemesanan.id_member = member.id_member WHERE YEAR (tanggal_pemesanan) = '$tahun' AND status_pemesanan = '$status'");
		return $ambil->result_array();
	}
	

}

/* End of file Mlaporan.php */
/* Location: ./application/models/admin/Mlaporan.php */
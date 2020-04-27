<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtestimoni extends CI_Model {

	function tampil_testimoni()
	{
		$this->db->select('*');
		$this->db->from('testimoni');
		$this->db->join('pemesanan', 'testimoni.id_pemesanan = pemesanan.id_pemesanan', 'left');
		$this->db->join('member', 'pemesanan.id_member = member.id_member', 'left');
		
		$ambil = $this->db->get();
	
		return $ambil->result_array();

	}

}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */
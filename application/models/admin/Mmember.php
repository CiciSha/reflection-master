<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmember extends CI_Model {

	function tampil_member()
	{
		$this->db->select('*');
		$this->db->from('member');
		
		$ambil = $this->db->get();
	
		return $ambil->result_array();

	}

}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */
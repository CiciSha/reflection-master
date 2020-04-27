<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpengaturan extends CI_Model {
	function tampil_pengaturan()
	{
		$ambil = $this->db->get('pengaturan');
		return $ambil->result_array();
	}
	function ambil_pengaturan($id_pengaturan)
	{
		$this->db->where('id_pengaturan', $id_pengaturan);
		$ambil = $this->db->get('pengaturan');
		return $ambil->row_array();
	}
	function ubah_pengaturan($id_pengaturan,$input)
	{
		$this->db->where('id_pengaturan', $id_pengaturan);
		$this->db->update('pengaturan', $input);
	}
	function simpan_pengaturan($input)
	{
		$this->db->insert('pengaturan', $input);
	}
	function ubah_password($input)
	{
		$id_admin = $_SESSION['admin']['id_admin'];
		$input['password_admin'] = sha1($input['password_admin']);
		$this->db->where('id_admin', $id_admin);
		$this->db->update('admin', $input);
	}
	
	

}

/* End of file Mpengaturan.php */
/* Location: ./application/models/admin/Mpengaturan.php */
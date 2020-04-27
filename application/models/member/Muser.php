<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	function login_user($input)
	{
		// 1. mengambil data admin
		$username = $input['username'];
		$password = sha1($input['password']);

		$this->db->where('username_admin', $username);
		$this->db->where('password_admin', $password);
		$ambil = $this->db->get('admin');
		//2. hitung $ambil, untuk menentukan data valid atau tidak
		$hitung=$ambil->num_rows();
		if ($hitung==1)
		{
			//3. pecah $ambil ke bentuk array
			$pecah = $ambil->row_array();
			//4. membuat session dengan nama admi, session berisi data $pecah
			$this->session->set_userdata("admin", $pecah);
			// return sukses
			return "sukses";

		}
		else
		{
			$this->db->where('username_member', $username);
			$this->db->where('password_member', $password);
			$this->db->where('status_member', "Sudah Verifikasi");
			$ambil = $this->db->get('member');
		//2. hitung $ambil, untuk menentukan data valid atau tidak
			$hitung=$ambil->num_rows();
			if ($hitung==1)
			{
			//3. pecah $ambil ke bentuk array
				$pecah = $ambil->row_array();
			//4. membuat session dengan nama admi, session berisi data $pecah
				$this->session->set_userdata("member", $pecah);
			// return sukses
				return "sukses-member";

			}
			else
			{
				return "gagal";
			}
			
		}

	}
}

/* End of file Muser.php */
/* Location: ./application/models/member/Muser.php */
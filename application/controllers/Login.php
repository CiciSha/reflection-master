<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent ::__construct();
		$this->load->model('member/Muser');
	}

	public function index()
	{
		$input = $this->input->post();

		if ($input)
		{
			$hasil_login=$this->Muser->login_user($input);
			if ($hasil_login=="sukses")
			{
				redirect('admin/home','refresh');
			}
			elseif ($hasil_login=="sukses-member")
			{
				redirect('home','refresh');
			}
			elseif ($hasil_login=="gagal") 
			{
				echo "<script>alert('Username atau password yang Anda inputkan salah!');</script>";
				redirect('login','refresh');
			}
		}
		$this->load->view('member/login/Login.php');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
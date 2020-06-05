<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testimoni extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mtestimoni');
	}

	public function index()
	{
		$data ['member'] = $this->Mtestimoni->tampil_testimoni();

		$this->load->view('admin/template/Header');
		$this->load->view('admin/Testimoni', $data);
		$this->load->view('admin/template/Footer');
	}
	function Diterima($id_testimoni)
	{
		$status['status_testimoni']="Diterima";
		$this->db->where('id_testimoni', $id_testimoni);
		$this->db->update('testimoni', $status);
		redirect('admin/testimoni','refresh');
	}
	function Ditolak($id_testimoni)
	{
		$status['status_testimoni']="Ditolak";
		$this->db->where('id_testimoni', $id_testimoni);
		$this->db->update('testimoni', $status);
		redirect('admin/testimoni','refresh');
	}
		
	
}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */
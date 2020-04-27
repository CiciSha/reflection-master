<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mportofolio extends CI_Model {

	function tampil_portofolio()
	{
		$this->db->select('*');
		$this->db->from('portofolio');
		
		$ambil = $this->db->get();
		return $ambil->result_array();
	}
	function simpan_portofolio($input)
	{
		$config['upload_path']          = './assets/image/portofolio';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

        // 2. memanggil library upload
		$this->load->library('upload', $config);
        // panggil function untuk upload
		$foto= $this->upload->do_upload("foto");
		if($foto)
		{
			$input['foto'] = $this->upload->data("file_name");

        //  simpan data ke db
			$this->db->insert('portofolio', $input);
		}
		else
		{
			$this->db->insert('portofolio', $input);
		}
	}
	function ambil_portofolio($id_portofolio)
	{
		$this->db->where('id_portofolio', $id_portofolio);
		$ambil = $this->db->get("portofolio");
		return $ambil->row_array();
	}
	function ubah_portofolio($input,$id_portofolio)
	{
		$config['upload_path'] = './assets/image/portofolio/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload', $config);


		$mengupload = $this->upload->do_upload("foto");
		if ($mengupload) 
		{
			$detail = $this->ambil_portofolio($id_portofolio);
			$foto_hapus = $detail['foto'];
			if ($foto_hapus) 
			{
				unlink("./assets/image/portofolio/$foto_hapus");
			}

			$input['foto'] = $this->upload->data("file_name");
			$this->db->where('id_portofolio', $id_portofolio);
			$this->db->update('portofolio', $input);
		}
		else
		{
			$this->db->where('id_portofolio', $id_portofolio);
			$this->db->update('portofolio', $input);
		}
		
	}
	function tampil_portofolio_paket($id_paket)
	{
		$this->db->join('paket', 'portofolio.id_paket = paket.id_paket', 'left');
		$this->db->where('portofolio.id_paket', $id_paket);
		$ambil = $this->db->get('portofolio');
		return $ambil->result_array();

	}
	
}
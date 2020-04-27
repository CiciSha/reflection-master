<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstudio extends CI_Model {

	function tampil_studio()
	{
		$this->db->select('*');
		$this->db->from('studio');
		
		$ambil = $this->db->get();
		return $ambil->result_array();
	}

	function simpan_studio($input)
	{
		$this->db->insert('studio', $input);
		
	}

	function get_detail_studio($id_studio) 
	{
		$this->db->where('detail_studio.id_studio', $id_studio);
		$this->db->join('studio', 'detail_studio.id_studio=studio.id_studio', 'left');

		$ambil = $this->db->get('detail_studio');

		return $ambil->result_array();

	}

	function ambil_studio($id_studio)
	{
		$this->db->where('id_studio', $id_studio);
		$ambil = $this->db->get('studio');
		return $ambil->row_array();
	}

	function simpan_detail_studio($input, $id_studio)
	{
		$config['upload_path']          = './assets/image/studio';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$input['id_studio'] = $id_studio;
        // 2. memanggil library upload
		$this->load->library('upload', $config);
        // panggil function untuk upload
		$foto= $this->upload->do_upload("foto_background");

		if($foto)
		{
			$input['foto_background'] = $this->upload->data("file_name");
			$this->db->insert('detail_studio', $input);
		}
		else
		{
			$this->db->insert('detail_studio', $input);
		}
	}
	function ambil_detail_studio($id_detail_studio)
	{
		$this->db->join('studio', 'detail_studio.id_studio = studio.id_studio', 'left');
		$this->db->where('id_detail_studio', $id_detail_studio);
		$ambil = $this->db->get('detail_studio');
		return $ambil->row_array();
	}
	function ubah_studio($input,$id_studio)
	{
		$this->db->where('id_studio', $id_studio);
		$this->db->update('studio', $input);
	}
	function ubah_detail_studio($input, $id_detail_studio)
	{
		$config['upload_path'] = './assets/image/studio/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload', $config);


		$mengupload = $this->upload->do_upload("foto_background");
		if ($mengupload) 
		{
			$detail = $this->ambil_detail_studio($id_detail_studio);
			$foto_hapus = $detail['foto_background'];
			if ($foto_hapus) 
			{
				unlink("./assets/image/studio/$foto_hapus");
			}

			$input['foto_background'] = $this->upload->data("file_name");
			$this->db->where('id_detail_studio', $id_detail_studio);
			$this->db->update('detail_studio', $input);
			echo "<pre>";
			print_r ($input);
			echo "</pre>";
		}
		else
		{
			$this->db->where('id_detail_studio', $id_detail_studio);
			$this->db->update('detail_studio', $input);
		}

	}
	function tampil_detail_studio()
	{
		$ambil = $this->db->get('detail_studio');
		return $ambil->result_array();
	}



}

/* End of file M_studio.php */
/* Location: ./application/models/admin/M_studio.php */
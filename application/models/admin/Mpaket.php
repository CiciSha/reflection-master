<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpaket extends CI_Model {

	public function getAllPaket() 
	{
		$ambil = $this->db->get("paket");
		return $ambil->result_array();
	}
	function ambil_paket($id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$ambil_paket = $this->db->get('paket');
		return $ambil_paket->row_array();
	}
	function simpan_paket($input)
	{
		$config['upload_path']          = './assets/image/paket';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

        // 2. memanggil library upload
		$this->load->library('upload', $config);
        // panggil function untuk upload
		$foto= $this->upload->do_upload("foto_paket");
		if($foto)
		{
			$input['foto_paket'] = $this->upload->data("file_name");

        //  ssimpan data ke db
			$this->db->insert('paket', $input);
		}
		else
		{
			$this->db->insert('paket', $input);
		}
	}


	function ambil_detail_paket($id_paket)
	{
		$this->db->where('tipe_paket.id_paket', $id_paket);
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$ambil = $this->db->get('tipe_paket');
		return $ambil->result_array();
	}

	function simpan_detail_paket($input,$id_paket) //belum bisa jalan
	{
		$input['id_paket']=$id_paket;
		// $input['id_paket'] = $id_paket;
		$config['upload_path']          = './assets/image/tipe';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';

        // 2. memanggil library upload
		$this->load->library('upload', $config);
        // panggil function untuk upload
		$foto= $this->upload->do_upload("foto_tipe_paket");
		if($foto)
		{
			$input['foto_tipe_paket'] = $this->upload->data("file_name");

        //  ssimpan data ke db
			$this->db->insert('tipe_paket', $input);
		}
		else
		{
			$this->db->insert('tipe_paket', $input);
		}
	}

	function ubah_paket($input,$id_paket)
	{
		$config['upload_path'] = './assets/image/paket/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload', $config);


		$mengupload = $this->upload->do_upload("foto_paket");
		if ($mengupload) 
		{
			$detail = $this->ambil_paket($id_paket);
			$foto_hapus = $detail['foto_paket'];
			if ($foto_hapus) 
			{
				unlink("./assets/image/paket/$foto_hapus");
			}

			$input['foto_paket'] = $this->upload->data("file_name");
			$this->db->where('id_paket', $id_paket);
			$this->db->update('paket', $input);
		}
		else
		{
			$this->db->where('id_paket', $id_paket);
			$this->db->update('paket', $input);
		}
	}
	function hapus_paket($id_paket)
	{
		$data	= $this->ambil_paket($id_paket);
		$foto_hapus = $data['foto_paket'];
		if ($foto_hapus) 
		{
			unlink("./assets/image/paket/$foto_hapus");
		}
		$this->db->where('id_paket', $id_paket);
		$this->db->delete('paket');
	}
	function ambil_tipe_paket($id_tipe_paket)
	{
		$this->db->where('id_tipe_paket', $id_tipe_paket);
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$ambil = $this->db->get('tipe_paket');
		return $ambil->row_array();
	}
	function ubah_tipe_paket($input,$id_tipe_paket)
	{
		$config['upload_path'] = './assets/image/tipe/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';


		$this->load->library('upload', $config);


		$mengupload = $this->upload->do_upload("foto_tipe_paket");
		if ($mengupload) 
		{
			$detail = $this->ambil_tipe_paket($id_tipe_paket);
			$foto_hapus = $detail['foto_tipe_paket'];
			if ($foto_hapus) 
			{
				unlink("./assets/image/tipe/$foto_hapus");
			}

			$input['foto_tipe_paket'] = $this->upload->data("file_name");
			$this->db->where('id_tipe_paket', $id_tipe_paket);
			$this->db->update('tipe_paket', $input);
		}
		else
		{
			$this->db->where('id_tipe_paket', $id_tipe_paket);
			$this->db->update('tipe_paket', $input);
		}

	}
	function simpan_paket_studio($id_tipe_paket,$input)
	{
		foreach ($input['id_studio'] as $key => $value) 
		{
			$inputan['id_studio'] = $value;
			$inputan['id_tipe_paket'] = $id_tipe_paket;
			$this->db->insert('paket_studio', $inputan);
		}
	}
	function ambil_paket_studio($id_tipe_paket)
	{
		$this->db->join('studio', 'paket_studio.id_studio = studio.id_studio', 'left');
		$this->db->where('paket_studio.id_tipe_paket', $id_tipe_paket);
		$ambil = $this->db->get('paket_studio');
		return $ambil->result_array();
	}
	function cek_jumlah_orang($id_tipe_paket)
	{
		$this->db->where('id_tipe_paket', $id_tipe_paket);
		$ambil = $this->db->get('tipe_paket');
		return $ambil->row_array();
	}
	function simpan_reservasi_paket($input)
	{
		$pemesanan['id_member'] =  $_SESSION['member']['id_member'];
		$pemesanan['id_tipe_paket'] = $input['id_tipe_paket'];
		$pemesanan['kode_pemesanan'] =  RandomString();
		$pemesanan['tanggal_pemesanan'] = date("Y-m-d");
		$pemesanan['tanggal_booking'] = $input['tanggal_booking'];
		$pemesanan['status_pemesanan'] = "Pending";
		$pemesanan['jumlah_orang'] = $input['jumlah_orang'];
		$pemesanan['total_bayar'] = $input['total_bayar'];

		$this->db->insert('pemesanan', $pemesanan);
		$id_pemesanan = $this->db->insert_id();

		$hitung = count($input['id_detail_studio']);

		if ($hitung==1) 
		{
			$detail['id_pemesanan'] = $id_pemesanan;
			$detail['id_detail_studio'] = $input['id_detail_studio']; 
			$this->db->insert('detail_pemesanan', $detail);
		} 
		else 
		{
			foreach ($input['id_detail_studio'] as $key => $value) 
			{
				$detail['id_pemesanan'] = $id_pemesanan;
				$detail['id_detail_studio'] = $value; 
				$this->db->insert('detail_pemesanan', $detail);
			}
		}
		

		unset($input['id']);
		unset($input['id_studio']);
		unset($input['harga_tambahan']);

		// mengambil pengaturan untuk tampilan kirim email
		$this->db->where('id_pengaturan', 5);
		$ambil = $this->db->get('pengaturan');
		$data_pecah = $ambil->row_array();
		$template = $data_pecah['isi_pengaturan'];


		// mengambil nama paket,studio
		$this->db->join('studio', 'paket_studio.id_studio = studio.id_studio', 'left');
		$this->db->join('tipe_paket', 'paket_studio.id_tipe_paket = tipe_paket.id_tipe_paket', 'left');
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$this->db->where('tipe_paket.id_paket', $input['id_paket']);
		$ambil = $this->db->get('paket_studio');
		$pecah_paket =  $ambil->row_array();
		$data_paket = $pecah_paket['nama_paket'];
		$data_studio = $pecah_paket['nama_studio'];

		// mengambil nama_background
		$this->db->where('detail_studio.id_studio', $pecah_paket['id_studio']);
		$ambil = $this->db->get('detail_studio');
		$pecah_detail = $ambil->row_array();
		$data_background = $pecah_detail['nama_background'];

		$template = str_replace('{nama_member}', $input['nama_member'], $template);
		$template = str_replace('{kode_pemesanan}', $pemesanan['kode_pemesanan'], $template);
		if (empty($input['tambah'])) 
		{
			$template = str_replace('{jumlah_orang}', 0, $template);
		} 
		else 
		{
			$template = str_replace('{jumlah_orang}', $input['tambah'], $template);
		}
		
		$template = str_replace('{total_bayar}', $input['total_bayar'], $template);
		$template = str_replace('{nama_paket}', $data_paket, $template);
		$template = str_replace('{nama_tipe_paket}', $pecah_paket['nama_tipe_paket'], $template);
		$template = str_replace('{min_dp_tipe_paket}', $pecah_paket['min_dp_tipe_paket'], $template);


		$mail = new PHPMailer();
		$body = $template;
		$mail->IsSMTP();
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		$mail->Host = "smtp.gmail.com";
		$mail->SMTPDebug = 0; 
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "tls"; 
		$mail->Host = "smtp.gmail.com"; 
		$mail->Port = 587; 
		$mail->Username = "harya.sriharyati07@gmail.com"; 
		$mail->Password = "7Januari1997"; 

		$mail->SetFrom("harya.sriharyati07@gmail.com", 'Reflection Photography');

		$mail->AddReplyTo("harya.sriharyati07@gmail.com","Reflection Photography");

		$mail->Subject = "Detail Pesanan Member";

		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; 
		$mail->MsgHTML($body);

		$address = $_SESSION['member']['email_member'];
		$mail->AddAddress($address, "Reflection Photography");

		if(!$mail->Send())
		{
			echo "<pre>";
			echo "Mailer Error: " . $mail->ErrorInfo;
			echo "</pre>";
		} 
		else
		{
			echo "Message sent!";
		}

		// if ($hitung==1) 
		// {

		// 	$template = str_replace('{nama_studio}', $data_studio, $template);
		// 	$template = str_replace('{nama_background}', $data_background, $template);
		// }
		// else
		// {
		// 	foreach ($input['id_detail_studio'] as $key => $value) 
		// 	{
		// 		$this->db->join('studio', 'detail_studio.id_studio = studio.id_studio', 'left');
		// 		$this->db->where('id_detail_studio', $value);
		// 		$ambil = $this->db->get('detail_studio');
		// 		$pecah_perulangan = $ambil->row_array();
		// 		$studio_perulangan[] = $pecah_perulangan['nama_studio'];
		// 		$background_perulangan[] = $pecah_perulangan['nama_background'];
		// 	}

			// $nama_studio = join($studio_perulangan," & ");
			// $background = join($background_perulangan," & ");

			// $template = str_replace("{nama_studio}", $nama_studio, $template);
			// $template = str_replace("{nama_background}", $background, $template);
		// }
	}
}

/* End of file Mpaket.php */
/* Location: ./application/models/Mpaket.php */
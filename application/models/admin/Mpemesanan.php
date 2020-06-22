<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpemesanan extends CI_Model {

	function tampil_pemesanan()
	{
		$this->db->join('member', 'pemesanan.id_member=member.id_member', 'left');
		$this->db->order_by('id_pemesanan', 'desc');
		$ambil = $this->db->get("pemesanan");
		return $ambil->result_array();
	}

	function ambil_pemesanan($id_pemesanan)
	{
		$this->db->join('tipe_paket', 'pemesanan.id_tipe_paket = tipe_paket.id_tipe_paket', 'left');
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$this->db->where('id_pemesanan', $id_pemesanan);
		$ambil = $this->db->get('pemesanan');
		return $ambil->row_array();
	}

	function reschedule($input, $id_pemesanan)
	{
		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $input);
	}
	function tampil_pemesanan_member($id_member)
	{
		$this->db->join('tipe_paket', 'pemesanan.id_tipe_paket = tipe_paket.id_tipe_paket', 'left');
		$this->db->join('paket', 'tipe_paket.id_paket = paket.id_paket', 'left');
		$this->db->where('pemesanan.id_member', $id_member);
		$this->db->order_by('id_pemesanan', 'desc');
		$ambil = $this->db->get('pemesanan');
		return $ambil->result_array();
	}
	function simpan_pembayaran($input,$id_pemesanan)
	{
		$input['id_pemesanan']= $id_pemesanan;
		$input['tanggal_bayar']= date("Y-m-d");

		$config['upload_path']= './assets/image/pembayaran';
		$config['allowed_types']= 'gif|jpg|png|jpeg';

		$this->load->library('upload', $config);
		// panggil function untuk upload
		$input['jenis_pembayaran'] = "Transfer";
		$foto= $this->upload->do_upload("foto_bukti_bayar");
		if($foto)
		{
			$input['foto_bukti_bayar'] = $this->upload->data("file_name");

			// simpan data ke db
			$this->db->insert('pembayaran', $input);
		}

		$inputan['status_pemesanan']= "Menunggu Konfirmasi";

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $inputan);

		$this->db->where('id_pengaturan', 6);
		$ambil = $this->db->get('pengaturan');
		$pecah_pengaturan = $ambil->row_array();
		$isi_pengaturan = $pecah_pengaturan['isi_pengaturan'];

		$this->db->where('id_pemesanan', $id_pemesanan);
		$ambil_pemesanan = $this->db->get('pemesanan');
		$pecah_pemesanan = $ambil_pemesanan->row_array();
		$kode_pemesanan = $pecah_pemesanan['kode_pemesanan'];

		$sisa_tagihan = $pecah_pemesanan['total_bayar'] - $input['jumlah_bayar'];

		$isi_pengaturan = str_replace('{kode_pemesanan}', $kode_pemesanan,$isi_pengaturan);
		$isi_pengaturan = str_replace('{tanggal_pembayaran}', $input['tanggal_bayar'],$isi_pengaturan);
		$isi_pengaturan = str_replace('{jumlah_bayar}', $input['jumlah_bayar'],$isi_pengaturan);
		$isi_pengaturan = str_replace('{jenis_pembayaran}', $input['jenis_pembayaran'],$isi_pengaturan);
		$isi_pengaturan = str_replace('{status_pembayaran}', $input['status_pembayaran'],$isi_pengaturan);
		if ($input['status_pembayaran']=="Lunas") 
		{
			$isi_pengaturan = str_replace('{sisa_tagihan}',0,$isi_pengaturan);
		}
		else
		{
			$isi_pengaturan = str_replace('{sisa_tagihan}',$sisa_tagihan,$isi_pengaturan);
		}



		$mail = new PHPMailer();
		$body = $isi_pengaturan;
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

		$mail->Subject = "Konfirmasi Pembayaran";

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
	}
function ambil_pembayaran($id_pemesanan)
{
	$this->db->join('pemesanan', 'pembayaran.id_pemesanan = pemesanan.id_pemesanan', 'left');
	$this->db->join('member', 'member.id_member = member.id_member', 'left');
	$this->db->where('pembayaran.id_pemesanan', $id_pemesanan);
	$this->db->order_by('id_pembayaran', 'desc');
	$ambil = $this->db->get('pembayaran');
	return $ambil->row_array();
}
function ubah_pemesanan($input,$id_pemesanan)
{
	unset($input['pose']);
	unset($input['file']);
	unset($input['harga_pose']);
	unset($input['harga_file']);
	unset($input['harga']);

	$inputan['max_pose_pemesanan'] = $input['max_pose_pemesanan'];
	$inputan['max_file_pemesanan'] = $input['max_file_pemesanan'];
	$inputan['total_tambahan'] = $input['total_tagihan'];

	$this->db->where('id_pemesanan', $id_pemesanan);
	$this->db->update('pemesanan', $inputan);

	$pembayaran['jenis_pembayaran'] = "Tunai";
	$pembayaran['jumlah_bayar'] = $input['total_tagihan_keseluruhan'];
	$pembayaran['id_pemesanan'] = $id_pemesanan;
	$pembayaran['status_pembayaran'] = "Lunas";
	$pembayaran['tanggal_bayar'] = date("Y-m-d");
	$pembayaran['tanggal_konfirmasi'] = date("Y-m-d");

	$this->db->insert('pembayaran', $pembayaran);
}
function ambil_pembayaran_pemesanan($id_pemesanan)
{
	$this->db->join('pemesanan', 'pembayaran.id_pemesanan = pemesanan.id_pemesanan', 'left');
	$this->db->where('pembayaran.id_pemesanan', $id_pemesanan);
		// $this->db->order_by('id_pembayaran', 'desc');
	$ambil = $this->db->get('pembayaran');
	return $ambil->result_array();
}
function simpan_testimoni($input,$id_pemesanan)
{
	$input['id_pemesanan'] = $id_pemesanan;
	$input['tanggal_testimoni'] = date("Y-m-d");
	$input['status_testimoni'] = "Menunggu";

	$this->db->insert('testimoni', $input);
}
function tampil_testimoni()
{
	$this->db->join('pemesanan', 'testimoni.id_pemesanan = pemesanan.id_pemesanan', 'left');
	$this->db->join('member', 'pemesanan.id_member = member.id_member', 'left');
	$this->db->where('status_testimoni', 'Diterima');
	$input = $this->db->get('testimoni');
	return $input->result_array();
}
function hitung_pemesanan($id_paket)
{
	$bulan = date("m");
	$tahun = date("Y");
	$ambil = $this->db->query("SELECT COUNT(pemesanan.id_tipe_paket) AS jumlah_paket FROM pemesanan
		LEFT JOIN tipe_paket ON pemesanan.id_tipe_paket=tipe_paket.id_tipe_paket
		LEFT JOIN paket ON tipe_paket.id_paket=paket.id_paket
		WHERE tipe_paket.id_paket='$id_paket' AND MONTH(pemesanan.tanggal_pemesanan)='$bulan' AND YEAR(pemesanan.tanggal_pemesanan)='$tahun'");
	return $ambil->row_array();
}
}
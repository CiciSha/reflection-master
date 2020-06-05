<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require "./phpmailer/PHPMailerAutoload.php";

class Mmember extends CI_Model {
	function simpan_member($input)
	{
		$input['status_member'] = 'Belum Verifikasi';
		$input['password_member'] = sha1($input['password_member']);
		unset($input['password_conf']);
		$this->db->insert('member', $input);

		$id_member = $this->db->insert_id();

		$this->db->where('id_pengaturan', 4);
		$ambil = $this->db->get('pengaturan');
		$template_pendaftaran = $ambil->row_array();
		$template = $template_pendaftaran['isi_pengaturan'];
		$template = str_replace('{nama_member}', $input['nama_member'], $template);
		$template = str_replace('{id_member}', $id_member, $template);

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

		$mail->Subject = "Verifikasi Akun Member Reflection Photography";

		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; 
		$mail->MsgHTML($body);

		$address = $input['email_member'];
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
	function ubah_password($input,$id_member)
	{
		$input['password_member'] = sha1($input['password']);
		unset($input['password']);

		$this->db->where('id_member', $id_member);
		$this->db->update('member', $input);
	}
	function ubah_member($input,$id_member)
	{
		// $input['password_member'] = sha1($input['password']);
		unset($input['password']);
		unset($input['password_member']);

		$this->db->where('id_member', $id_member);
		$this->db->update('member', $input);
	}
	function cek_email($email)
	{
		$this->db->where('email_member', $email);
		$ambil = $this->db->get('member');
		$hasil = $ambil->num_rows();
		if ($hasil==1) 
		{
			$pecah = $ambil->row_array();
			return $pecah['id_member'];
		}
		else
		{
			return "salah";
		}
	}
	function lupa_password($password,$id)
	{
		$data['password_member'] = sha1($password);

		$this->db->where('id_member', $id);
		$this->db->update('member', $data);
	}
	

}

/* End of file Mmember.php */
/* Location: ./application/models/member/Mmember.php */
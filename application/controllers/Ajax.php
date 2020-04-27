<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Mstudio');
		$this->load->model('admin/Mpaket');
		$this->load->model('member/Mmember');
	}

	public function studio()
	{
		// $id_studio = $_POST['id_studio'];
		$background = $this->Mstudio->tampil_detail_studio();
		?>
		<div class="row">
			<?php foreach ($background as $key => $value): ?>
				<div class="col-md-4 gambar-<?php echo $value["id_studio"] ?>" style="display: none;" id="">
					<input type="radio" name="id_detail_studio[<?php echo $value['id_detail_studio'] ?>]" value="<?php echo $value['id_detail_studio'] ?>">
					<img src="<?php echo base_url("./assets/image/studio/$value[foto_background]") ?>" width="250">
				</div>
			<?php endforeach ?>
		</div>
		<?php
	}
	public function studio_dua()
	{
		$detail_studio = $this->Mstudio->get_detail_studio($_POST['id_studio']);
		
		?>
		<div class="row">
			<?php foreach ($detail_studio as $key => $value): ?>
				<div class="col-md-4">
					<input type="radio" name="id_detail_studio" value="<?php echo $value['id_detail_studio'] ?>">
					<img src="<?php echo base_url("./assets/image/studio/$value[foto_background]") ?>" width="250">
				</div>
			<?php endforeach ?>
		</div>
		<?php
	}
	function jumlah_orang()
	{
		$jumlah = $this->Mpaket->cek_jumlah_orang($_POST['id_tipe_paket']);
		echo $jumlah['max_jumlah_orang'];
	}
	function update_password()
	{
		$password = $_POST['password'];
		$id = $_POST['id'];

		$this->Mmember->lupa_password($password,$id);
	}
}


/* End of file Ajax.php */
/* Location: ./application/controllers/Ajax.php */
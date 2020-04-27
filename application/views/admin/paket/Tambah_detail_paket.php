
<div
class="collapse navbar-collapse"
id="navbarSupportedContent"
style="text-align: right !important;">
<span>Tambah Detail Tipe Paket</span>
</div>
</div>
</nav>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Paket</label>
		<input type="text" name="" readonly="" class="form-control" value="<?php echo $paket['nama_paket'] ?>">	
	</div>

	<div class="form-group">
		<label>Tipe Paket</label>
		<input type="text" name="nama_tipe_paket" class="form-control">
		<?php echo form_error('nama_tipe_paket', '<div class="text-danger"><i>**', '<i/></div>'); ?>
	</div>

	<div class="form-group">
		<label>Harga</label>
		<input type="number" name="harga_tipe_paket" class="form-control" placeholder="Example:150000">
	</div>

	<div class="form-group">
		<label>Deskripsi</label>
		<textarea class="form-control" name="deskripsi_tipe_paket"></textarea>
	</div>

	<div class="form-group">
		<label>Minimal DP</label>
		<input type="number" name="min_dp_tipe_paket" class="form-control" placeholder="Example:150000">
	</div>

	<div class="form-group">
		<label>Max Jumlah Orang</label>
		<input type="number" name="max_jumlah_orang" class="form-control" placeholder="1,2,3">
	</div>

	<div class="form-group">
		<label>Max Jumlah Pose</label>
		<input type="number" name="max_pose" class="form-control" placeholder="1,2,3">
	</div>

	<div class="form-group">
		<label>Max Jumlah File</label>
		<input type="number" name="max_file" class="form-control" placeholder="1,2,3">
	</div>

	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="foto_tipe_paket" class="form-control">	
	</div>

	<button class="btn btn-primary">Simpan</button>

</form>

</div> 
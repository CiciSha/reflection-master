<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Tambah Portofolio</span>
</div>
</div>
</nav>

<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Paket</label>
		<select name="id_paket" class="form-control">
			<option value="">-Pilih Paket-</option>
			<?php foreach ($paket as $key => $value): ?>
				<option value="<?php echo $value['id_paket'] ?>"><?php echo $value['nama_paket'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Foto</label>
		<input type="file" name="foto" required="" class="form-control"> 
	</div>
	<div class="form-group">
		<label>Keterangan</label>
		<textarea name="keterangan" class="form-control" rows="5"></textarea>
	</div>
	<button class="btn btn-primary">Simpan</button>	
</form>
</div>





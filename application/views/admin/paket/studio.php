<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;"> <span>Studio Tipe Paket</span>
</div>
</div>
</nav>
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/home")?>">Beranda</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/paket") ?>">Paket</a>
	</li>
	 <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/paket/tampil_detail_paket/$paket[id_paket]") ?>">Detail Paket</a>
	</li>
    <li class="breadcrumb-item active" aria-current="page">Studio Tipe Paket</li>
</ol>
</nav>
<form method="post">
	<div class="form-group">
		<label>Tipe Paket</label>
		<input type="text" readonly="" name="" value="<?php echo $paket['nama_tipe_paket'] ?>" class="form-control">
	</div>
	<div class="form-group">
		<label>Studio</label>
		<?php if (empty($paket_studio)): ?>
			<?php foreach ($studio as $key => $value): ?> <br>
				<input type="checkbox" name="id_studio[]" value="<?php echo $value['nama_studio'] ?>"> <?php echo $value['nama_studio'] ?>
			<?php endforeach ?>
		<?php else: ?>
			<?php foreach ($paket_studio as $key => $value): ?> <br>
				<input type="checkbox" checked="checked" name="id_studio[]" value="<?php echo $value['nama_studio'] ?>"> <?php echo $value['nama_studio'] ?>
			<?php endforeach ?>
		<?php endif ?>
	</div>
	<?php if (empty($paket_studio)): ?>
		<button class="btn btn-info">Simpan</button>
	<?php else: ?>
		<a href="" class="btn btn-success">Kembali</a>
	<?php endif ?>
</form>
<div
class="collapse navbar-collapse"
id="navbarSupportedContent">
<p style="text-align: right !important;">Tambah Detail Studio</p>
</div>
</div>
</nav>


<!-- breadcrumb -->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item btn-link">
			<a href="<?php echo base_url("admin/home")?>">Beranda</a>
		</li>
		<li class="breadcrumb-item btn-link">
			<a href="<?php echo base_url("admin/studio") ?>">Studio</a>
		</li>
		<li class="breadcrumb-item btn-link">
			<a href="<?php echo base_url("admin/studio/tampil_detail_studio") ?>">Detail Studio</a> 
		</li> 
		<li class="breadcrumb-item active" aria-current="page">Tambah Detail Studio</li>
	</ol>
</nav>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Background</label>
		<input type="number" name="nama_background" placeholder="Example:1 " class="form-control">	
		<!-- <?php echo form_error('nama_background', '<div class="text-danger"><i>**', '</i></div>'); ?> -->
	</div>
	<div class="form-group">
		<label>Foto Background</label>
		<input type="file" name="foto_background" class="form-control">	
		
	</div>
	<button class="btn btn-primary">Simpan</button>
</form>
</div> 
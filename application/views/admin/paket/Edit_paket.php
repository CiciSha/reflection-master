
<div class="collapse navbar-collapse"
id="navbarSupportedContent" 
style="text-align: right !important;">
<span >Edit Paket</span>
    </div>
  </div>
</nav>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/home")?>">Beranda</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/paket") ?>">Paket</a>
	</li>
    <li class="breadcrumb-item active" aria-current="page">Edit Paket</li>
</ol>
</nav>
<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Paket</label>
		<input type="text" name="nama_paket" required="" class="form-control" value="<?php echo $paket['nama_paket'] ?>"> 
	</div>
	<div class="form-group">
		<label>Foto</label>
		<br>
		<img src="<?php echo base_url("assets/image/paket/$paket[foto_paket]") ?>" width="250"> 
		<input type="file" name="foto_paket" class="form-control"> 
	</div>
	<button class="btn btn-primary">Simpan</button>
	
</form>

</div>





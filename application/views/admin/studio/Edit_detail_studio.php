<div class="collapse navbar-collapse"
id="navbarSupportedContent" 
style="text-align: right !important;">
<span >Edit Detail Studio</span>
    </div>
  </div>
</nav>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/home")?>">Beranda</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/studio") ?>">Studio</a>
	</li>
	<li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/studio/tampil_detail_studio/$id_studio") ?>">Detail Studio</a>
	</li>
    <li class="breadcrumb-item active" aria-current="page">Edit Detail Studio</li>
</ol>
</nav>
<!-- <pre><?php print_r($detail_studio) ?></pre> -->
<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Background</label>
		<input type="text" name="nama_background" required="" class="form-control" value="<?php echo $detail_studio['nama_background'] ?>"> 
	</div>
	<div class="form-group">
		<label>Foto Background</label>
		<br>
		<img src="<?php echo base_url("./assets/image/studio/$detail_studio[foto_background]") ?>" width="250"> 
		<input type="file" name="foto_background" class="form-control"> 
	</div>
	<button class="btn btn-primary">Simpan</button>
	
</form>

</div>





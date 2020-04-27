<div
class="collapse navbar-collapse"
id="navbarSupportedContent">
<p style="text-align: right !important;">Tambah Studio</p>
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
        <li class="breadcrumb-item active" aria-current="page">Tambah Studio</li>
    </ol>
</nav>


<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Studio</label>
		<input type="number" name="nama_studio" placeholder="Example:1 " class="form-control">	
     <?php echo form_error('nama_studio', '<div class="text-danger"><i>**', '</i></div>'); ?>
 </div>
 <button class="btn btn-primary">Simpan</button>
</form>
</div> 
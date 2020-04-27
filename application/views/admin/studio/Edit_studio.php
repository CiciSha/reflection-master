
<div
    class="collapse navbar-collapse"
    id="navbarSupportedContent">
    <p style="text-align: right !important;">Edit Studio</p>
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
    <li class="breadcrumb-item active" aria-current="page">Edit Studio</li>
</ol>
</nav>

<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Studio</label>
		<input type="text" name="nama_studio" class="form-control" value="<?php echo $studio['nama_studio'] ?>"> 
	</div>
	<button class="btn btn-primary">Simpan</button>
	
</form>


</div> 
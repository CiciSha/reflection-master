<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Ubah Pengaturan</span>
</div>
</div>
</nav>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/home")?>">Beranda</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/pengaturan") ?>">Pengaturan</a>
	</li>
    <li class="breadcrumb-item active" aria-current="page">Edit Pengaturan</li>
</ol>
</nav>

<form method="post"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama Pengaturan</label>
		<input type="text" name="nama_pengaturan" required="" class="form-control" value="<?php echo $pengaturan['nama_pengaturan'] ?>"> 
	</div>
	<div class="form-group">
		<label>Isi Pengaturan</label>
		<textarea class="form-control" name="isi_pengaturan"><?php echo $pengaturan['isi_pengaturan'] ?></textarea>
	</div>
	<button class="btn btn-primary">Simpan</button>
</form>
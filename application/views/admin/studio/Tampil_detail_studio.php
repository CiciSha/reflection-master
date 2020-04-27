
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span >Detail Studio</span>
</div>
</div>
</nav>
<?php if (empty($detail_studio)): ?>
	<div class="alert alert-danger">Data Tidak Tersedia</div>
<?php else: ?>
	<p>Studio : <?php echo $detail_studio[0]['nama_studio'] ?> </p>
<?php endif ?>
<!-- breadcrumb -->
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/home")?>">Beranda</a>
    </li>
    <li class="breadcrumb-item btn-link">
        <a href="<?php echo base_url("admin/studio") ?>">Studio</a>
	</li>
    <li class="breadcrumb-item active" aria-current="page">Detail Studio</li>
</ol>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Background</th>
			<th>Foto Background</th>
			<th style="text-align: center;">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($detail_studio as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['nama_background']; ?></td>
				<td class="gambar-paket">
					<img src="<?php echo base_url("assets/image/studio/$value[foto_background]") ?>" width="150">
				</td>
				<td style="text-align: center;">
					<a href="<?php echo base_url("admin/studio/edit_detail_studio/$value[id_detail_studio]")?>" class="btn btn-info btn-xs">Edit</a>
					<a href="<?php echo base_url("admin/studio/")?>" class="btn btn-warning btn-xs">Hapus</a>
				</td>
			</tr>
			
		<?php endforeach ?>
	</tbody>
</table>

<a href="<?php echo base_url("admin/studio/tambah_detail_studio/$id_studio")?>"class="btn btn-primary">Tambah</a>

</div>



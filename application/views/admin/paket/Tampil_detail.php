<div
class="collapse navbar-collapse"
id="navbarSupportedContent"
style="text-align: right !important;">
<span>Detail Tipe Paket</span>
</div>
</div>
</nav>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item btn-link">
			<a href="<?php echo base_url("admin/home")?>">Beranda</a>
		</li>
		<li class="breadcrumb-item btn-link">
			<a href="<?php echo base_url("admin/paket")?>">Paket</a>
		</li>
		<li class="breadcrumb-item active" aria-current="page">Detail Paket</li>
	</ol>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th class="align-middle col5">No</th>
			<th class="align-middle col5">Tipe</th>
			<th class="align-middle col10">Harga</th>
			<th class="align-middle col-1">Deskripsi</th>
			<th class="align-middle col10">Foto Tipe Paket</th>
			<th class="align-middle col10">Minimal DP</th>
			<th class="align-middle">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($tipe_paket as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['nama_tipe_paket'] ?></td>
				<td>Rp.<?php echo $value['harga_tipe_paket'] ?></td>
				<td><?php echo $value['deskripsi_tipe_paket'] ?></td>
				<td class="gambar-paket">
					<img src="<?php echo base_url("assets/image/tipe/$value[foto_tipe_paket]") ?>" width="150">
				</td>
				<td><?php echo $value['min_dp_tipe_paket'] ?></td>
				<td>
					<a href="<?php echo base_url("admin/paket/edit_detail_paket/$value[id_tipe_paket]")?>" class="btn btn-info btn-xs">Edit</a>
					<br><br>
					<a href="<?php echo base_url("admin/paket/studio/$value[id_tipe_paket]") ?>" class="btn btn-success btn-xs">Studio</a>
				</td>
			</tr>	
		<?php endforeach ?>	
	</tbody>	
</table>
<a href="<?php echo base_url("admin/paket/form_detail_paket/$id_paket") ?>" class="btn btn-primary">Tambah</a>
</div> 

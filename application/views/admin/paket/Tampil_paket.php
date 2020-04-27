<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span >Data Paket</span>
</div>
</div>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th class="col10">No</th>
			<th>Paket</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($paket as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['nama_paket'] ?></td>
				<td class="gambar-paket">
					<img src="<?php echo base_url("assets/image/paket/$value[foto_paket]") ?>" width="150">
				</td>
				<td>
					<a href="<?php echo base_url("admin/paket/tampil_detail_paket/$value[id_paket]")?>" class="btn btn-info btn-xs">Detail</a>
					<a href="<?php echo base_url("admin/paket/tampil_edit_paket/$value[id_paket]")?>" class="btn btn-warning btn-xs">Edit</a>
					<a href="<?php echo base_url("admin/paket/hapus/$value[id_paket]") ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
				</td>
			</tr>
			
		<?php endforeach ?>
	</tbody>
</table>

<a href="<?php echo base_url("admin/paket/tambah_paket")?>" class="btn btn-primary">Tambah</a>

</div>



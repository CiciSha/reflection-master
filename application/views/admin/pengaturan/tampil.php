<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span >Pengaturan</span>
</div>
</div>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Pengaturan</th>
			<th>Isi</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pengaturan as $key => $value): ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['nama_pengaturan'] ?></td>
				<td><?php echo $value['isi_pengaturan'] ?></td>
				<td>
					<a href="<?php echo base_url("admin/pengaturan/ubah/$value[id_pengaturan]") ?>" class="btn btn-warning">Edit</a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
<a href="<?php echo base_url("admin/pengaturan/tambah") ?>" class="btn btn-primary">Tambah</a>
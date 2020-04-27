
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
<span >Portofolio</span>
    </div>
  </div>
</nav>

<!-- <pre> <?php print_r($paket) ?></pre> -->
<hr>
<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Foto</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($portofolio as $key => $value): ?>
			<tr>
				<td><?php echo $key+1; ?></td>
				<td class="gambar-paket">
					<img src="<?php echo base_url("assets/image/portofolio/$value[foto]") ?>" width="150">
				</td>
				<td><?php echo $value ['keterangan']; ?></td>
				<td>
					<a href="<?php echo base_url("admin/portofolio/tampil_edit_portofolio/$value[id_portofolio]")?>" class="btn btn-warning btn-xs">Edit</a>
					<a href="" class="btn btn-danger btn-xs">Hapus</a>
				</td>
			</tr>	
		<?php endforeach ?>
	</tbody>
</table>

<a href="<?php echo base_url("admin/portofolio/tampil_tambah_portofolio")?>" class="btn btn-primary">Tambah</a>

</div>





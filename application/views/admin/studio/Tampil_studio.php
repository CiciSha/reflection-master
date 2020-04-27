
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
<span >Data Studio</span>
    </div>
  </div>
</nav>

<!-- <h3>Data Studio</h3> -->
<!-- <pre> <?php print_r($paket) ?></pre> -->

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Studio</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($studio as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['nama_studio']; ?></td>
				<td>
					
					<a href="<?php echo base_url("admin/studio/tampil_detail_studio/$value[id_studio]")?>" class="btn btn-info btn-xs">Detail</a>
					<a href="<?php echo base_url("admin/studio/edit_studio/$value[id_studio]")?>" class="btn btn-warning btn-xs">Edit</a>
					<a href="" class="btn btn-danger btn-xs">Hapus</a>
				</td>
			</tr>	
		<?php endforeach ?>
	</tbody>
</table>
<a href="<?php echo base_url("admin/studio/tambah")?>" class="btn btn-primary">Tambah</a>
</div>





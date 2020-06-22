<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Data Testimoni</span>
</div>
</div>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Pemesanan</th>
			<th>Nama Member</th>
			<th>Tanggal Testimoni</th>
			<th>Isi Testimoni</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
	</thead>
	<tbody>
		<!-- <pre><?php print_r($member) ?></pre> -->
		<?php foreach ($member as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['kode_pemesanan'] ?></td>
				<td><?php echo $value ['nama_member'] ?></td>
				<td><?php echo $value ['tanggal_testimoni']; ?></td>
				<td><?php echo $value ['isi_testimoni']; ?></td>
				<td><?php echo $value ['status_testimoni']; ?></td>
				<td>
					<?php if ($value ['status_testimoni']=="Menunggu"): ?>
					<a href="<?php 	echo base_url("admin/testimoni/Diterima/$value[id_testimoni]") ?>" class="btn btn-success">Diterima</a>
					<a href="<?php 	echo base_url("admin/testimoni/Ditolak/$value[id_testimoni]") ?>" class="btn btn-danger">Ditolak</a>	
					<?php endif ?>
				</td>	
				</tr>	
			<?php endforeach ?>
		</tbody>
	</table>
</div>



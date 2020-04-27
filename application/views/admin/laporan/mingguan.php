<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Laporan Mingguan</span>
</div>
</div>
</nav>
<form method="post">
	<div class="form-group">
		<label>Tanggal Awal</label>
		<input type="date" name="tanggal_awal" class="form-control col-md-5">
	</div>
	<div class="form-group">
		<label>Tanggal Akhir</label>
		<input type="date" name="tanggal_akhir" class="form-control col-md-5">
	</div>
	<button class="btn btn-info">Filter</button>
</form>
<br><br>
<?php if (empty($mingguan)): ?>
	<div class="alert alert-danger">Silahkan Pilih Tanggal Untuk Melihat Laporan</div>
<?php else: ?>
	<table class="table table-hover" id="thetable">
			<thead>
				<tr>
					<th>Kode Pemesanan</th>
					<th>Member</th>
					<th>Tanggal Pemesanan</th>
					<th>Jumlah Orang</th>
					<th>Total Bayar</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php $total=0; ?>
				<?php foreach ($mingguan as $key => $value): ?>
					<tr>
						<td><?php echo $value['kode_pemesanan'] ?></td>
						<td><?php echo $value['nama_member'] ?></td>
						<td><?php echo date("d F Y", strtotime($value['tanggal_pemesanan'])) ?></td>
						<td><?php echo $value['jumlah_orang'] ?></td>
						<td>Rp. <?php echo number_format($value['total_bayar']) ?></td>
						<td><?php echo $value['status_pemesanan'] ?></td>
					</tr>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Jumlah</th>
					<td>Rp.<?php echo number_format($total['jumlah_bayar']) ?></td>
				</tr>
			</tfoot>
		</table>
		<a href="<?php echo base_url("admin/laporan/cetak_mingguan/$_POST[tanggal_awal]/$_POST[tanggal_akhir]") ?>" class="btn btn-info">Cetak</a>
<?php endif ?>
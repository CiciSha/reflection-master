<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Laporan Harian</span>
</div>
</div>
</nav>
<div class="container">
	<form method="post">
		<div class="form-group">
			<label>Tanggal</label>
			<input type="date" name="tanggal" class="form-control col-md-5">
		</div>
		<button class="btn btn-info">Filter</button>
	</form>
	<br><br>
	<?php if (empty($harian)): ?>
		<?php if (!isset($_POST['tanggal'])): ?>
			<div class="alert alert-danger">Silahkan Filter Tanggal Untuk Melihat Laporan</div>
		<?php else: ?>
			<div class="alert alert-danger">Tidak Ada Data Pada Tanggal Tersebut</div>
		<?php endif ?>
	<?php else: ?>
		<?php if (isset($_POST['tanggal'])): ?>
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
					<?php foreach ($harian as $key => $value): ?>
						<?php 
						$data_laporan = laporan_harian($_POST['tanggal']);
						?>
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
						<td>Rp.<?php echo number_format($data_laporan['jumlah_bayar']) ?></td>
					</tr>
				</tfoot>
			</table>
			<a href="<?php echo base_url("admin/laporan/cetak_harian/$_POST[tanggal]") ?>" class="btn btn-info">Cetak</a>
		<?php endif ?>
	<?php endif ?>
</div>
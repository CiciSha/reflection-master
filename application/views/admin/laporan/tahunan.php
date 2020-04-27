<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Laporan Bulanan</span>
</div>
</div>
</nav>
<form method="post">
	<div class="form-group">
		<label>Tahun</label>
		<select class="form-control col-md-5" name="tahun">
			<option value="">Pilih Tahun</option>
			<?php for ($i=2019; $i <=date("Y") ; $i++):?>
				<option value="<?php echo $i ?>"><?php echo $i ?></option>
			<?php endfor ?>
		</select>
	</div>
	<button class="btn btn-info">Filter</button>
</form>
<br><br>
<?php if (empty($tahunan)): ?>
	<?php if (!isset($_POST['tahun'])): ?>
			<div class="alert alert-danger">Silahkan Filter Tahun Untuk Melihat Laporan</div>
		<?php else: ?>
			<div class="alert alert-danger">Tidak Ada Data Pada Tahun Tersebut</div>
		<?php endif ?>
<?php else: ?>
	<table class="table table-hover" id="thetable">
		<thead>
			<tr>
				<th>Kode Reservasi</th>
				<th>Member</th>
				<th>Tanggal Pemesanan</th>
				<th>Jumlah Orang</th>
				<th>Total Bayar</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php $total=0 ?>
		<?php foreach ($tahunan as $key => $value): ?>
			<?php $total += $value['total_bayar'] ?>
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
				<td>Rp.<?php echo number_format($total) ?></td>
			</tr>
		</tfoot>
	</table>
	<a href="<?php echo base_url("admin/laporan/cetak_tahunan/$_POST[tahun]") ?>" class="btn btn-info">Cetak</a>
<?php endif ?>

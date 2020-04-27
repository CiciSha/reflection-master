<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span >Laporan Bulanan</span>
</div>
</div>
</nav>
<form method="post">
	<div class="form-group">
		<label>Bulan</label>
		<select class="form-control col-md-5" name="bulan">
			<option value="">-Pilih Bulan-</option>
			<option value="01">Januari</option>
			<option value="02">Februari</option>
			<option value="03">Maret</option>
			<option value="04">April</option>
			<option value="05">Mei</option>
			<option value="06">Juni</option>
			<option value="07">Juli</option>
			<option value="08">Agustus</option>
			<option value="09">September</option>
			<option value="10">Oktober</option>
			<option value="11">November</option>
			<option value="12">Desember</option>
		</select>
	</div>
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
<?php if (empty($bulanan)): ?>
	<div class="alert alert-danger">Silahkan Pilih Bulan Dan Tahun Untuk Melihat Laporan</div>
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
		<?php $total=0 ?>
		<?php foreach ($bulanan as $key => $value): ?>
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
	<a href="<?php echo base_url("admin/laporan/cetak_bulanan/$_POST[bulan]/$_POST[tahun]") ?>" class="btn btn-info">Cetak</a>
<?php endif ?>
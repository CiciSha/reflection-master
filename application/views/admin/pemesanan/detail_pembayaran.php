<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Data Pembayaran</span>
</div>
</div>
</nav>

<table class="table table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Pemesanan</th>
			<th>Tanggal Bayar</th>
			<th>Jenis Pembayaran</th>
			<th>Status Pembayaran</th>
			<th>Total Bayar</th>
		</tr>
		<pre><?php print_r($detail_pembayaran) ?></pre>
	</thead>
	<tbody>
	<?php $total=0 ?>
		<?php foreach ($detail_pembayaran as $key => $value): ?>
			<?php $total+=$value['jumlah_bayar'] ?>
			<tr>
				<td><?php echo $key+1 ?></td>
				<td><?php echo $value['kode_pemesanan'] ?></td>
				<td><?php echo date("d F Y", strtotime($value['tanggal_bayar'])) ?></td>
				<td><?php echo $value['jenis_pembayaran'] ?></td>
				<td><?php echo $value['status_pembayaran'] ?></td>
				<td>Rp. <?php echo number_format($value['jumlah_bayar']) ?></td>
			</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="5">Total Pembayaran</th>
			<th>Rp. <?php echo number_format($total) ?></th>
		</tr>
	</tfoot>
</table>
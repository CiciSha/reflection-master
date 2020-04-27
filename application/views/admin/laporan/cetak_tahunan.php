<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Tahunan</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css") ?>">

 <script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
 <style>
 	th,td
 	{
 		font-size: 20px;
 	}
 </style>
</head>
<body>
	<div class="container">
		<table class="table table-hover">
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
				<?php foreach ($tahunan as $key => $value): ?>
					<?php 
					$total += $value['total_bayar'];
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
					<td>Rp.<?php echo number_format($total) ?></td>
				</tr>
			</tfoot>
		</table>
	</div>
	<script>print()</script>
</body>
</html>
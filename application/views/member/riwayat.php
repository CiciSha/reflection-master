<div class="container" style="margin-bottom: 10%;"><br>
	<h3>Riwayat Pemesanan</h3><br>
	<table class= "table table-hover" id="thetable">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Pemesanan</th>
				<th>Tanggal Pemesanan</th>
				<th>Tanggal Booking</th>
				<th>Paket/Tipe Paket</th>
				<th>Jumlah Bayar</th>
				<th>Status</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($pemesanan as $key => $value): ?>
				<?php 
				$kurang_tiga_hari = date("Y-m-d", strtotime('-4 days', strtotime($value['tanggal_booking'])));
				$hari_ini = date("Y-m-d");
				$hasil_testimoni = cek_testimoni($value['id_pemesanan']);
				?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value ['kode_pemesanan']; ?></td>
					<td><?php echo date("d F Y", strtotime($value['tanggal_pemesanan'])); ?></td>
					<td><?php echo date("d F Y", strtotime($value['tanggal_booking'])); ?></td>
					<td><?php echo $value ['nama_paket']; ?>/ <?php echo $value['nama_tipe_paket']; ?></td>
					<td>Rp. <?php echo number_format($value['total_bayar']); ?></td>
					<td><?php echo $value ['status_pemesanan']; ?></td>
					<td>
						<?php if ($value['status_pemesanan']=="Selesai"): ?>
							<?php if ($hasil_testimoni==0): ?>
								<a href="<?php echo base_url("member/testimoni/$value[id_pemesanan]") ?>" class="btn btn-success">Isi Testimoni</a>
							<?php endif ?>
						<?php elseif($value['status_pemesanan']!="Selesai" && $value['status_pemesanan']!="Lunas"&&$value['status_pemesanan']!="Menunggu Konfirmasi"&&$value['status_pemesanan']!="Cancel"&&$value['status_pemesanan']!="Proses"): ?>
							<a href="<?php echo base_url("member/pembayaran/$value[id_pemesanan]") ?>"class="btn btn-info">Konfirmasi Pembayaran</a>
						<?php endif ?>
						<?php if ($kurang_tiga_hari==$hari_ini && $value['status_pemesanan']!="Cancel"): ?>
							<a href="<?php echo base_url("member/reschedule/$value[id_pemesanan]") ?>" class="btn btn-success btn-xs">Reschedule</a> <br> <br>
						<?php endif ?>
					</td>
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
	<span class="text-danger" style="font-size: 15px">**Tombol Reschedule akan muncul sebelum H-3!</span>
</div>
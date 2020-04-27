<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Data Pemesanan</span>
</div>
</div>
</nav>

<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Tanggal Pesan</th>
			<th>Tanggal Booking</th>
			<th>Jumlah Orang</th>
			<th>Total Bayar</th>
			<th>Status</th>
			<th>Opsi</th>
			
		</tr>
	</thead>
	<tbody>
		<?php foreach ($pemesanan as $key => $value): ?>
			<?php 
			$kurang_tiga_hari = date("Y-m-d", strtotime('-3 days', strtotime($value['tanggal_booking'])));
			$lebih_tiga_hari = date("Y-m-d", strtotime('+3 days', strtotime($value['tanggal_booking'])));
			$hari_ini = date("Y-m-d");
			?>

			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['kode_pemesanan'] ?></td>
				<td><?php echo $value ['nama_member']; ?></td>
				<td><?php echo $value ['tanggal_pemesanan']; ?></td>
				<td><?php echo $value ['tanggal_booking']; ?></td>
				<td><?php echo $value ['jumlah_orang']; ?></td>
				<td><?php echo $value ['total_bayar']; ?></td>
				<td><?php echo $value ['status_pemesanan']; ?></td>
				<td>
					<a href="<?php echo base_url("admin/pemesanan/detail/$value[id_pemesanan]") ?>" class="btn btn-info btn-sm">Detail Pesanan</a> <br><br>
					<?php if ($kurang_tiga_hari==$hari_ini OR $lebih_tiga_hari==$hari_ini): ?>
						<a href="<?php echo base_url("admin/pemesanan/reschedule/$value[id_pemesanan]") ?>" class="btn btn-success btn-xs">Reschedule</a> <br> <br>
						<?php elseif($value['status_pemesanan']=="Proses"): ?>
							<a href="<?php echo base_url("admin/pemesanan/selesai/$value[id_pemesanan]") ?>" class="btn btn-info btn-sm">Selesai</a> <br><br>
							<?php elseif($value['status_pemesanan']=="Menunggu Konfirmasi"): ?>
								<a href="<?php echo base_url("admin/pemesanan/dp/$value[id_pemesanan]") ?>" class="btn btn-warning">Pembayaran</a> <br><br>
							<?php endif ?>
							<a href="<?php echo base_url("admin/pemesanan/detail_pembayaran/$value[id_pemesanan]") ?>" class="btn btn-success btn-sm">Detail Pembayaran</a>
						</td>
					</tr>	
				<?php endforeach ?>
			</tbody> 
		</table>
	</div>




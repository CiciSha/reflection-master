<div
class="collapse navbar-collapse"
id="navbarSupportedContent"> &nbsp;
<h3 style="text-align: right !important;">Konfirmasi Pembayaran</h3>
</div>
</div>
</nav>
<div class="row">
	<div >
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>Nama</th>
					<th>Tanggal Bayar</th>
					<th>Nama Rekening</th>
					<th>No. Rekening</th>
					<th>Jumlah Bayar</th>
					<th>Nama Bank</th>
					<th>Status</th>
					<th>Bukti Bayar</th>
					<th>Opsi</th>

				</tr>
			</thead>
			<!-- <pre><?php print_r($pembayaran) ?></pre> -->
			<tbody>
				<tr>
					<td><?php echo $pembayaran ['nama_member']; ?></td>
					<td><?php echo $pembayaran ['tanggal_bayar']; ?></td>
					<td><?php echo $pembayaran ['nama_rekening']; ?></td>
					<td><?php echo $pembayaran ['no_rekening']; ?></td>
					<td><?php echo $pembayaran ['jumlah_bayar']; ?></td>
					<td><?php echo $pembayaran ['nama_bank']; ?></td>
					<td><?php echo $pembayaran ['status_pembayaran']; ?></td>
					<td>
						<a href="<?php echo base_url("./assets/image/pembayaran/$pembayaran[foto_bukti_bayar]") ?>" target="_blank">
							<img title="Klik Gambar Untuk Lihat Detail" src="<?php echo base_url("./assets/image/pembayaran/$pembayaran[foto_bukti_bayar]") ?>" width="150px">
						</a>
					</td>
					<td>
						<?php if ($pembayaran['status_pembayaran']=="DP"): ?>
							<a title="Klik Jika Data Valid" href="<?php echo base_url("admin/pemesanan/Konfirmasi_dp/$id_pemesanan") ?>" class="btn btn-success">Konfirmasi</a>
						<?php elseif($pembayaran['status_pembayaran']=="Lunas"): ?>
							<a title="Klik Jika Data Valid" href="<?php echo base_url("admin/pemesanan/Konfirmasi_lunas/$pembayaran[id_pembayaran]/$id_pemesanan") ?>" class="btn btn-warning">Konfirmasi</a>
						<?php endif ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div> 
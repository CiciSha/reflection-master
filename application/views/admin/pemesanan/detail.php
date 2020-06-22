<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Detail Pemesanan</span>
</div>
</div>
</nav>
<form method="post">
	<table class="table table-hover">
		<tr>
			<th>Kode Pemesanan</th>
			<th>:</th>
			<td><?php echo $pemesanan['kode_pemesanan'] ?></td>
		</tr>
		<tr>
			<th>Paket/Tipe Paket</th>
			<th>:</th>
			<td><?php echo $pemesanan['nama_paket'] ?> / <?php echo $pemesanan['nama_tipe_paket'] ?></td>
		</tr>
		<tr>
			<th>Max Jumlah Pose</th>
			<th>:</th>
			<td>
				<input type="" readonly="" class="form-control" name="pose" value="<?php echo $pemesanan['max_pose']." ".'Pose' ?>"  style="width: 50%; border: transparent;"></td>
			</td>
		</tr>
		<tr>
			<th>Max Jumlah File</th>
			<th>:</th>
			<td>
				<input type="" readonly="" class="form-control" name="file" value="<?php echo $pemesanan['max_file']." ".'File' ?>"  style="width: 50%; border: transparent;"></td>
			</tr>
			<tr>
				<th>Tambah Jumlah Pose</th>
				<th>:</th>
				<td>
					<?php if (empty($pemesanan['max_pose_pemesanan'])): ?>
						<input type="" value="0" name="max_pose_pemesanan" class="form-control" placeholder="Inputkan Tambahan Jumlah Pose" style="width: 60%;">
						<?php elseif($pemesanan['status_pemesanan']=="Selesai"): ?>
							<input type="" readonly="" value="<?php echo $pemesanan['max_pose_pemesanan'] ?>" name="max_pose_pemesanan" class="form-control" placeholder="Inputkan Tambahan Jumlah Pose" style="width: 60%;">
							<?php else: ?>
								<input type="" value="<?php echo $pemesanan['max_pose_pemesanan'] ?>" name="max_pose_pemesanan" class="form-control" placeholder="Inputkan Tambahan Jumlah Pose" style="width: 60%;">
							<?php endif ?>
						</td>
					</tr>
					<tr>
						<th>Tambah Jumlah File</th>
						<th>:</th>
						<td>
							<?php if (empty($pemesanan['max_file_pemesanan'])): ?>
								<input type="" value="0" name="max_file_pemesanan" class="form-control" placeholder="Inputkan Tambahan Jumlah File" style="width: 60%;">
								<?php elseif($pemesanan['status_pemesanan']=="Selesai"): ?>
									<input type="" readonly="" value="<?php echo $pemesanan['max_file_pemesanan'] ?>" name="max_file_pemesanan" class="form-control" placeholder="Inputkan Tambahan Jumlah File" style="width: 60%;">
									<?php else: ?>
										<input type="" value="<?php echo $pemesanan['max_file_pemesanan'] ?>" name="max_file_pemesanan" class="form-control" placeholder="Inputkan Tambahan Jumlah File" style="width: 60%;">
									<?php endif ?>
								</td>
							</tr>
							<tr>
								<th>Harga Paket</th>
								<th>:</th>
								<td>Rp. <?php echo number_format($pemesanan['harga_tipe_paket']) ?></td>
							</tr>
							<tr>
								<th>Jenis Pembayaran</th>
								<th>:</th>
								<?php if ($pemesanan['status_pemesanan']=="Lunas" && !empty($pemesanan['total_tambahan'])): ?>
									<td>Rp. <?php echo $pemesanan['total_bayar'] + $pemesanan['total_tambahan'] ?> (<?php echo $pemesanan['status_pemesanan'] ?>, dengan jenis pembayaran <?php echo $pembayaran['jenis_pembayaran'] ?>)</td>
									<?php elseif($pemesanan['status_pemesanan']=="Cancel"): ?>
										<td>Rp. 0 <?php echo $pemesanan['status_pemesanan'] ?></td>
										<?php elseif( $pemesanan['status_pemesanan']=="Pending"): ?>
											<td>Rp. 0 </td>
											<?php elseif($pemesanan['status_pemesanan']=="DP"): ?>
												<td>Rp. <?php echo $pembayaran['jumlah_bayar'] ?> (<?php echo $pemesanan['status_pemesanan'] ?>, dengan jenis pembayaran <?php echo $pembayaran['jenis_pembayaran'] ?>)</td>
												<?php else: ?>
													<td>Rp. <?php echo $pemesanan['total_bayar'] + $pemesanan['total_tambahan'] ?> (<?php echo $pemesanan['status_pemesanan'] ?>, dengan jenis pembayaran <?php echo $pembayaran['jenis_pembayaran'] ?>)</td>
												<?php endif ?>
											</td>
										</tr>
										<?php if ($pemesanan['status_pemesanan']!="Cancel"): ?>
											<tr>
												<th class="text-danger">Total Tagihan Tambahan</th>
												<th>:</th>
												<td>
													<?php if (empty($pemesanan['total_tambahan'])): ?>
														<input type="" value="0" name="total_tagihan" class="form-control"  readonly="" style="width: 60%;">
														<?php else: ?>
															<input type="" value="<?php echo $pemesanan['total_tambahan'] ?>" name="total_tagihan" class="form-control"  readonly="" style="width: 60%;">
														<?php endif ?>
														<input type="" hidden="" name="harga_pose" value="<?php echo $pose['isi_pengaturan'] ?>">
														<input type="" hidden="" name="harga_file" value="<?php echo $file['isi_pengaturan'] ?>">
														<input type="" hidden="" name="" value="<?php echo $pemesanan['id_paket'] ?>">
														<input type="" name="harga" hidden="" value="<?php echo $pemesanan['total_bayar']-$pembayaran['jumlah_bayar'] ?>">
													</td>
												</tr>
												<tr>
													<th>Total Tagihan Keseluruhan</th>
													<th>:</th>
													<td>
														<?php if ($pemesanan['status_pemesanan']=="Proses"): ?>
															<input type="" name="" readonly="" value="<?php echo $pembayaran['jumlah_bayar'] ?>">
															<?php else: ?>
																<input type="" name="total_tagihan_keseluruhan" width="60%" readonly="" class="form-control">
															<?php endif ?>
															<br><br>
															<a href="<?php echo base_url("admin/pemesanan") ?>" class="btn btn-info">Kembali</a>
															<button class="btn btn-success">Simpan</button>
															<input type="" hidden="" name="harga_pose" value="<?php echo $pose['isi_pengaturan'] ?>">
															<input type="" hidden="" name="harga_file" value="<?php echo $file['isi_pengaturan'] ?>">
															<input type="" hidden="" name="" value="<?php echo $pemesanan['id_paket'] ?>">
														</td>
													</tr>
												</form>
												<?php else: ?>
												<?php endif ?>
											</table>
											<script>
												$(document).ready(function(){
													$("input[name=max_file_pemesanan]") .on('keyup', function(){
														var harga_bayar = $("input[name=harga]").val();
														var pose = $("input[name=pose]").val();
														var file = $("input[name=file]").val();
														var tambah_file = $("input[name=max_file_pemesanan]").val();
														var tambah_pose = $("input[name=max_pose_pemesanan]").val();
														var id = $("input[name=id]").val();
														var harga_pose = $("input[name=harga_pose]").val();
														var harga_file = $("input[name=harga_file]").val();
														if (tambah_pose !="" && tambah_file !="") 
														{
															var total_harga_pose = parseInt(tambah_pose)*parseInt(harga_pose);
															var total_harga_file = parseInt(tambah_file)*parseInt(harga_file);
															var total_tagihan = parseInt(total_harga_pose)+parseInt(total_harga_file);
															var total_selesai = parseInt(total_tagihan)+parseInt(harga_bayar);
															$("input[name=total_tagihan]").val(total_tagihan);
															$("input[name=total_tagihan_keseluruhan").val(total_selesai);
														}
														else if (tambah_pose !="") 
														{
															var total_harga_pose = parseInt(tambah_pose)*parseInt(harga_pose);
															var total_pose_selesai = parseInt(harga_bayar)+parseInt(total_harga_pose);
															$("input[name=total_tagihan]").val(total_harga_pose);
															$("input[name=total_tagihan_keseluruhan]").val(total_pose_selesai);
														}
														else if (tambah_file !="") 
														{
															var total_harga_file = parseInt(tambah_file)*parseInt(harga_file);
															var total_file_selesai = parseInt(total_harga_file)+parseInt(harga_bayar);
															$("input[name=total_tagihan_keseluruhan]").val(total_file_selesai);
															$("input[name=total_tagihan]").val(total_harga_file);
														}
													})
												})
											</script>
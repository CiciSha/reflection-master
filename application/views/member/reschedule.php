<div class="container">
	<br><br>
	<h4>Reschedule Untuk Pemesanan <?php echo $pemesanan['kode_pemesanan']; ?></h4>
	<hr> <br>
	<form method="post">
		<div class="form-group">
			<label>Reschedule</label>
			<input type="date" class="form-control" name="tanggal_booking" value="<?php echo $pemesanan['tanggal_booking'] ?>">
		</div>
		<button class="btn btn-info">Simpan</button> <br> <br>
	</form>
</div>
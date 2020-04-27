<div class="container" style="margin-top: 60px">
	<h3 style="margin-bottom: 40px;" class="text-center">Testimoni</h3>
	<div class="row">
		<div class="col-md-6 offset-3">
			<table class="table table-striped">
				<tr>
					<th>Member</th>
					<th> : </th>
					<td><?php echo $_SESSION['member']['nama_member'] ?></td>
				</tr>
				<tr>
					<th>Kode Pemesanan</th>
					<th> : </th>
					<td><?php echo $pemesanan['kode_pemesanan'] ?></td>
				</tr>	
			</table>
			<form method="post">
				<div class="form-group">
					<label>Isi Testimoni</label>
					<textarea class="form-control" rows="5" placeholder="Berikan Kritik dan Saran Anda" name="isi_testimoni"></textarea>
				</div>
				<button class="btn btn-success">Submit</button> <br><br>
			</form>	
		</div>	
	</div>	
</div>

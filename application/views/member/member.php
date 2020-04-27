<div class="container"> 
	<h3 class="mt-3">Informasi Member</h3>
	<div class="col-md-5 p-0 mb-5 mt-2">
		<table class="table table-borderless">
			<tr>
				<td width="150px">Nama</td>
				<td>:</td>
				<td><?php echo $_SESSION['member']['nama_member'] ?></td>
			</tr>
			<tr>
				<td width="150px">Email</td>
				<td>:</td>
				<td><?php echo $_SESSION['member']['email_member'] ?></td>
			</tr>
			<tr>
				<td width="150px">No. Telepon</td>
				<td>:</td>
				<td><?php echo $_SESSION['member']['no_telepon_member'] ?></td>
			</tr>
			<tr>
				<td width="150px">Alamat</td>
				<td>:</td>
				<td><?php echo $_SESSION['member']['alamat_member'] ?></td>
			</tr>
		</table>

		<button type="button" class="btn btn-primary rounded" data-toggle="modal" data-target="#exampleModal">
			Edit Profil
		</button>
	</div>
	

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- modal header -->
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit Profil Anda</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="post" action="<?php echo base_url("member/ubah_password") ?>">
						
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Nama Lengkap:</label>
							<input type="text" class="form-control" name="nama_member" value="<?php echo $_SESSION['member']['nama_member'] ?>">
						</div>

						<div class="form-group">
							<label for="recipient-name" class="col-form-label">No. Telepon:</label>
							<input type="text" class="form-control" name="no_telepon_member" value="<?php echo $_SESSION['member']['no_telepon_member'] ?>">
						</div>

						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Alamat:</label>
							<textarea class="form-control" name="alamat_member"><?php echo $_SESSION['member']['alamat_member'] ?></textarea>
						</div>

						<div class="form-group">
							<label for="message-text" class="col-form-label">Password Lama:</label>
							<input type="text" class="form-control" id="message-text">
						</div>


						<div class="form-group">
							<label for="message-text" class="col-form-label">Password Baru:</label>
							<input type="text" class="form-control" id="message-text">
						</div>

						<div class="form-group">
							<label for="message-text" class="col-form-label">Konfirmasi Password Baru:</label>
							<input type="text" class="form-control" id="message-text" name="password">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>


</div>
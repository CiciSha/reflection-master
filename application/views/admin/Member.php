<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: right !important;">
	<span>Data Member</span>
</div>
</div>
</nav>
<div class="container">
<table class="table table-hover" id="thetable">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Email</th>
			<th>No.Telepon</th>
			<th>Alamat</th>
			<th>Status</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($member as $key => $value): ?>
			<tr>
				<td> <?php echo $key+1; ?></td>
				<td><?php echo $value ['nama_member'] ?></td>
				<td><?php echo $value ['username_member']; ?></td>
				<td><?php echo $value ['email_member']; ?></td>
				<td><?php echo $value ['no_telepon_member']; ?></td>
				<td><?php echo $value ['alamat_member']; ?></td>
				<td> 
					<?php echo $value['status_member'] ?>
				</td>	
			</tr>	
		<?php endforeach ?>
	</tbody>
</table>
</div>



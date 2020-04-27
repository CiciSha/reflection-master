<div class="container" style="margin-top: 60px">
	<h3 style="margin-bottom: 40px;" class="text-center">Konfirmasi Pembayaran</h3>
	<form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom01">Kode Pemesanan</label>
				<input type="text" class="form-control" id="validationCustom01" placeholder="Kode Pemesanan" value="<?php echo $pemesanan['kode_pemesanan'] ?>" readonly>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom05">Pembayaran</label>
				<?php if ($pemesanan['status_pemesanan']=="DP"): ?>
					<input type="text" name="status_pembayaran" value="Lunas" class="form-control" readonly="">
				<?php else: ?>
					<select class="form-control" name="status_pembayaran">
						<option>-Pilih Jenis Pembayaran-</option>
						<option value="DP">DP</option>
						<option value="Lunas">Lunas</option>
					</select>
				<?php endif ?>
				<div class="invalid-feedback">
					Please provide a valid zip.
				</div>
			</div>
			<div class="col-md-4 mb-3" name="lunas" style="display: none;">
				<label for="validationCustom02">Jumlah Bayar</label>
				<input type="text" id="lunas" readonly="" name="jumlah_bayar" class="form-control"  placeholder="Jumlah Bayar" value="<?php echo $pemesanan['total_bayar'] ?>">
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3" name="dp" style="display: none;">
				<label for="validationCustom02">Pembayaran DP</label>
				<input type="text" readonly="" name="jumlah_bayar" class="form-control" id="dp" placeholder="Jumlah Bayar" value="<?php echo $tipe_paket['min_dp_tipe_paket'] ?>">
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3" name="sisa" style="display: none;">
				<label for="validationCustom02">Jumlah Bayar</label>
				<input type="text" readonly="" name="jumlah_bayar" class="form-control" id="sisa" placeholder="Jumlah Bayar" value="<?php echo $tipe_paket['min_dp_tipe_paket'] ?>">
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom02">Nama Pemilik Rekening</label>
				<input type="text" class="form-control" id="validationCustom02" placeholder="Nama Pemilik Rekening" name="nama_rekening" required>
				<div class="valid-feedback">
					Looks good!
				</div>
			</div>
		</div>
		<div class="form-row">
			<div class="col-md-4 mb-3">
				<label for="validationCustom03">No.Rekening</label>
				<input type="text" class="form-control" id="validationCustom03" name="no_rekening" placeholder="No.Rekening">
				<div class="invalid-feedback">
					Please provide a valid city.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom04">Nama Bank</label>
				<input type="text" class="form-control" name="nama_bank" id="validationCustom04" placeholder="Nama Bank" required>
				<div class="invalid-feedback">
					Please provide a valid state.
				</div>
			</div>
			<div class="col-md-4 mb-3">
				<label for="validationCustom05">Bukti Bayar</label>
				<input type="file" name="foto_bukti_bayar" class="form-control" id="validationCustom05" required>
				<div class="invalid-feedback">
					Please provide a valid zip.
				</div>
			</div>
		</div>
		
		<div class="col-md-4">
			<button class="btn btn-primary " type="submit">Submit form</button>
			
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$("select[name=status_pembayaran]").on('change',function(){
			var status = $(this).val();
			if (status=="DP") 
			{
				$("div[name=dp]").show('2000');
			}
			else
			{
				$("div[name=dp]").hide('2000');
				$("div[name=lunas]").show('2000');
			}
		})
	});
	$(document).ready(function(){
		var status_pembayaran = $("input[name=status_pembayaran]").val();
		var total_dp = $("#dp").val();
		var total_bayar = $("#lunas").attr("value");

		if (status_pembayaran=="Lunas") 
		{
			var sisa = parseInt(total_bayar) - parseInt(total_dp);

			$("#sisa").val(sisa);
			$("div[name=sisa]").show(1200);
		}
	})
</script>
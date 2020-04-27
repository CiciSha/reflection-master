<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pemesanan</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/font-awesome-4.7.0/css/font-awesome.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.css") ?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/hamburgers.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animsition/css/animsition.min.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/select2/select2.min.css") ?>">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/daterangepicker.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/util.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main_login.css") ?>">
</head>
<body>
	<style>
		.limiter
		{
			background-image: url('<?php echo base_url("assets/image/paket/GRADUATION-2.jpg") ?>');
		}
		
	</style>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50" style="width: 65%">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Form Pemesanan
						<hr>
					</span>
					<div class="form-group" >
						<label class="input100">Nama Lengkap <small class="text-danger">**Nama Harus Sesuai Dengan KTP</small></label>
						<input class="form-control" type="text" name="nama_member">
					</div>

					<div class="form-group" >
						<label class="input100">No. Telepon</label>
						<input class="form-control" type="text" name="no_telepon_member">
					</div>

					<div class="form-group" >
						<label class="input100">Tanggal Booking</label>
						<input class="form-control" type="date" name="tanggal_booking">  
					</div>

					<div class="form-group" >
						<label class="input100">Paket</label>
						<input type="" name="" readonly="" value="<?php echo $tipe_paket['nama_paket'] ?>" class="form-control">
						<input type="hidden" name="id_paket" value="<?php echo $tipe_paket['id_paket'] ?>">
					</div>

					<div class="form-group" >
						<label class="input100">Tipe Paket</label>
						<input type="" name="" readonly="" class="form-control" value="<?php echo $tipe_paket['nama_tipe_paket'] ?>">
						<input type="hidden" name="id_tipe_paket" value="<?php echo $tipe_paket['id_tipe_paket'] ?>">
					</div>
					<div class="form-group">
						<label class="input100">Max Orang</label>
						<input type="number" name="jumlah_orang" class="form-control" value="<?php echo $tipe_paket['max_jumlah_orang'] ?>" readonly>
						<input type="number" hidden="" name="jml" class="form-control" value="<?php echo $tipe_paket['max_jumlah_orang'] ?>">
						<input type="" hidden="" name="id" value="<?php echo $tipe_paket['id_tipe_paket'] ?>">
					</div>
					<?php if ($tipe_paket['nama_paket']!="Personal" && $tipe_paket['nama_paket']!='Maternity & Baby' && $tipe_paket['nama_paket']!='Prewedding Indoor' && $tipe_paket['nama_paket']!='Pass Foto'): ?>
						<div class="form-group">
							<label class="input100">Tambahan Orang(Optional)</label>
							<input type="number" name="tambah" class="form-control" placeholder="Silahkan Input Jumlah Orang" >
							<input type="" hidden="" name="id" value="<?php echo $tipe_paket['id_tipe_paket'] ?>">
						</div>
					<?php endif ?>
					<div class="form-group">
						<label class="input100">Total Bayar</label>
						<div data-total-bayar="<?php echo $tipe_paket['harga_tipe_paket'] ?>" id="data_total_bayar">
						</div>

						<input type="" name="total_bayar" readonly="" class="form-control" value="<?php echo $tipe_paket['harga_tipe_paket'] ?>">

						<input type="" hidden="" name="harga_tambahan" value="<?php echo $pengaturan[0]['isi_pengaturan'] ?>">
					</div>
					<div class="form-group">
						<label class="input100">Studio</label>
						<?php $hitung_studio = count($studio); ?>
						<?php if ($hitung_studio==2): ?>
							<?php foreach ($studio as $key => $value): ?>
								<input type="radio" id="<?php echo $value['id_studio'] ?>" name="id_studio" value="<?php echo $value['id_studio'] ?>"> <?php echo $value['nama_studio'] ?> <br>
							<?php endforeach ?>
							<?php else: ?>
								<?php foreach ($studio as $key => $value): ?>
									<input type="checkbox" name="id_studio[<?php echo $value['id_studio'] ?>]" value="<?php echo $value['id_studio'] ?>"> <?php echo $value['nama_studio'] ?> <br>
								<?php endforeach ?>
							<?php endif ?>
						</div>
						<div class="form-group">
							<label class="input100">Background</label>
							<div id="hasil">
							</div>
							<div id="hasil_dua"></div>
						</div>
						<br>
						<div class="" style="float:right !important;">
							<button class="btn btn-primary" >
								Pesan
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
		<script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js") ?>"></script>
		<script src="<?php echo base_url("assets/js/popper.js") ?>"></script>
		<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
		<script src="<?php echo base_url("assets/vendor/select2/select2.min.js") ?>"></script>
		<script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js") ?>"></script>
		<script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js") ?>"></script>
		<script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js") ?>"></script>
		<script>
			$(document).ready(function(){
				$.ajax({
					type:"GET",
					url : '<?php echo base_url("ajax/studio") ?>',
					success:function(hasil)
					{
						$("#hasil").html(hasil);
					}
				});
				$("input[type=checkbox]").on("click",function(){
					if ($(this).is(":checked")) 
					{
						var id=$(this).val();
						$(".gambar-"+id).show();
					}
					else
					{
						var id = $(this).val();
						$(".gambar-"+id).hide();
					}
				})
			})
			$(document).ready(function(){
				$("input[type=radio]").on('click', function(){
					var id_studio = $("input[name=id_studio]:checked").attr("id");
					$.ajax({
						type:"POST",
						url:"<?php echo base_url("ajax/studio_dua") ?>",
						data:"id_studio="+id_studio,
						success:function(hasil)
						{
							$("#hasil_dua").html(hasil);
						}
					})
				})
			});
			$(document).ready(function(){
				$("input[name=tambah]").on('keyup', function(){
					var tambah = $(this).val();
					var jumlah = $("input[name=jml]").val();
					var total_orang = parseInt(tambah)+parseInt(jumlah);
					$("input[name=jumlah_orang]").val(total_orang);
					var jml_orang = $("input[name=jumlah_orang]").val();
					var id = $("input[name=id]").val();
					var harga_tambahan = $("input[name=harga_tambahan]").val();
					var total_bayar = $("#data_total_bayar").attr('data-total-bayar');
					$.ajax({
						url:'<?php echo base_url("ajax/jumlah_orang") ?>',
						type:'POST',
						data:'id_tipe_paket='+id,
						success:function(hasil)
						{
							if (parseInt(jml_orang)>parseInt(hasil)) 
							{
								var orang = parseInt(jml_orang)-parseInt(hasil);
								var total_tambahan = parseInt(orang)*parseInt(harga_tambahan);
								var bayar = parseInt(total_tambahan)+parseInt(total_bayar);

								$("input[name=total_bayar]").val(bayar);
							}
							else
							{
								$("input[name=total_bayar]").val(total_bayar);
							}
						}
					})
				})
			})
		</script>

	</body>
	</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/font-awesome-4.7.0/css/font-awesome.min.css") ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css") ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/animate.css") ?>">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/hamburgers.min.css") ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/animsition/css/animsition.min.css") ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor/select2/select2.min.css") ?>">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/daterangepicker.css") ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/util.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/main_login.css") ?>">
	<!--===============================================================================================-->
</head>
<body>
	<style>
		.limiter
		{
			background-image: url('<?php echo base_url("assets/image/slider/Graduation.jpg") ?>');
		}
		
	</style>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post" name="tampil">
					<span class="login100-form-title p-b-33">
						Forgot Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email_member" placeholder="Inputkan Email Yang Sudah di Daftarkan">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<span name="notif" class="text-danger" style="display: none;">** Email Yang Diinputkan Salah</span>

					<div class="container-login100-form-btn m-t-20">
						<button name="submit" type="button" class="login100-form-btn">
							Submit
						</button>
					</div>
				</form>
				<form class="login100-form validate-form" method="post" name="sembunyi" style="display: none;">
					<span class="login100-form-title p-b-33">
						Forgot Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="password_member" placeholder="Inputkan Password Baru">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button type="button" name="update" class="login100-form-btn">
							Update
						</button>
					</div>
					<input hidden="" type="" name="id">
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
	<script src="<?php echo base_url("assets/js/main.js") ?>"></script>

	<script>
		$(document).ready(function(){
			$("button[name=submit]").on('click', function(){
				var email = $("input[name=email_member]").val();
				$.ajax({
					url:'<?php echo base_url('member/cek_email') ?>',
					data:'email='+email,
					type:'POST',
					success:function(hasil)
					{
						if (hasil!=="salah") 
						{
							$("form[name=tampil]").hide("10000");
							$("form[name=sembunyi]").show("10000");
							$("input[name=id]").val(hasil);
						}
						else
						{
							$("span[name=notif]").show("10000");
							$("form[name=sembunyi]").hide("10000");
						}
					}
				})
			})
		});
		$(document).ready(function(){
			$("button[name=update]").on('click', function(){
				var password = $("input[name=password_member]").val();
				var id = $("input[name=id]").val();
				$.ajax({
					url:'<?php echo base_url("ajax/update_password") ?>',
					type:'POST',
					data:'password='+password+'&id='+id,
					success:function(hasil)
					{
						location='<?php echo base_url("login") ?>';
					}
				})
			})
		})
	</script>

</body>
</html>
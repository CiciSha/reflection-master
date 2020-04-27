<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registrasi</title>
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
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Registrasi
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="nama_member" placeholder="Nama Lengkap">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="text" name="username_member" placeholder="Username">
						<?php echo form_error('username_member', '<div class="text-danger"><i>**','</i></div>'); ?>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name="password_member" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="password" name="password_conf" placeholder="Konfirmasi Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					<span name="sukses" style="display: none;" class="text-success">** Password Sesuai</span>
					<span name="gagal" style="display: none;" class="text-danger">** Password Tidak Sesuai</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email_member" placeholder="Email">
						<?php echo form_error('email_member', '<div class="text-danger"><i>**','</i></div>'); ?>
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="no_telepon_member" placeholder="No. Telepon">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<textarea class="input100" name="alamat_member" placeholder="Alamat"></textarea>  
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div><br>

					<div class="text-center">
						<span class="txt1">
							Already have account?
						</span>

						<a href="<?php echo base_url("login") ?>" class="txt2 hov1">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<!-- vendor/jquery/jquery-3.2.1.min.js -->
	<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/animsition/js/animsition.min.js") ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/js/popper.js") ?>"></script>
	<script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/select2/select2.min.js") ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/daterangepicker/moment.min.js") ?>"></script>
	<script src="<?php echo base_url("assets/vendor/daterangepicker/daterangepicker.js") ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor/countdowntime/countdowntime.js") ?>"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function(){
			$("input[name=password_conf]").on('keyup', function(){
				var password_conf = $(this).val();
				var password = $("input[name=password_member]").val();
				if (password_conf==password) 
				{
					$("span[name=sukses]").show(2000);
					$("span[name=gagal]").hide(2000);
				}
				else
				{
					$("span[name=gagal]").show(2000);
					$("span[name=sukses]").hide(2000);
				}
			})
		})
	</script>

</body>
</html>
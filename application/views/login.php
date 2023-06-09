<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url("assets/images/icons/favicon.ico"); ?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor1/bootstrap/css/bootstrap.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts1/font-awesome-4.7.0/css/font-awesome.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/fonts1/iconic/css/material-design-iconic-font.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor1/animate/animate.css"); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor1/css-hamburgers/hamburgers.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor1/animsition/css/animsition.min.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor1/select2/select2.min.css"); ?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/vendor1/daterangepicker/daterangepicker.css"); ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css1/util.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css1/main.css"); ?>">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url("assets/images/bg-01.jpg"); ?>');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form  action="<?php echo site_url("login/checkLoginUser"); ?>" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="https://www.facebook.com/" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://twitter.com/login?lang=fr" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="https://www.google.com/?hl=fr" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Sign Up Using
						</span>

						<a href="<?php echo site_url("login/inscription"); ?>" class="txt2">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor1/jquery/jquery-3.2.1.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor1/animsition/js/animsition.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor1/bootstrap/js/popper.js"); ?>"></script>
	<script src="<?php echo base_url("assets/vendor1/bootstrap/js/bootstrap.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor1/select2/select2.min.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor1/daterangepicker/moment.min.js"); ?>"></script>
	<script src="<?php echo base_url("assets/vendor1/daterangepicker/daterangepicker.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/vendor1/countdowntime/countdowntime.js"); ?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url("assets/js/main1.js"); ?>"></script>

</body>
</html>
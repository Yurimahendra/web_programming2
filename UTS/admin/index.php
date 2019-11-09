<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="../images/parwis3.jpeg">

	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	</head>
	<body>

		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<center>
					<?php 
						if(isset($_GET['pesan'])){
							if($_GET['pesan'] == "gagal"){
								echo "Login gagal ! username dan password salah !"; 
							}else if($_GET['pesan'] == "belum_login"){
								echo "Anda harus login untuk mengakses halaman reservation";
							}
						}
					?> 

					<form class="login100-form validate-form" action="proses_login.php" method="post">
					
						<img src="../images/user.svg" alt="icon" srcset="" width="90px"></center>
						<span class="login100-form-title p-b-33">
							Account Login
						</span>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input name="name" class="input100" type="text"  placeholder="Username">
							<span class="focus-input100-1"></span>
							<span class="focus-input100-2"></span>
						</div>

						<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
							<input name="pass" class="input100" type="password"  placeholder="Password">
							<span class="focus-input100-1"></span>
							<span class="focus-input100-2"></span>
						</div>

						<div class="container-login100-form-btn m-t-20">
							<button type="submit" class="login100-form-btn" >
								Sign in
							</button>
						</div>

						<div class="text-center p-t-45 p-b-4">
							<span class="txt1">

							</span>

							<a href="#" class="txt2 hov1">

							</a>
						</div>

						<div class="text-center">
							<span class="txt1">
								Create an account?
							</span>

							<a href="register.php" class="txt2 hov1">
								Sign up
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
					

					
	<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>
</html>
<!DOCTYPE html>
<html class="no-js" lang="zxx">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">

		<title>Login</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="./assets/img/logo/default.png">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="./assets/css/styles.css">
	</head>
	
	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="" method="POST" id="login-form">
					<h3>Log In</h3>
					
					<div class="form-holder left">
						<input type="text" name="email" id="email" placeholder="e-mail" class="form-control">
					</div>
					<div class="form-holder">
						<input type="password" name="pass" id="pass" placeholder="Password" class="form-control" style="font-size: 15px;">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" checked> Forgot <a href="./view/forgot.php">Password?</a>
							<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-login">
						<button>Login</button>
						<p>Don't Have an account? <a href="view\signup.html">Signup</a></p>
						
					</div>
				</form>
                <div class="image-holder left">
					<img src="./assets/img/ash-images/ashesi-6.jpg" alt="">
				</div>
			</div>
			<div style = "font-size:11px; color:#cc0000; margin-top:10px">
				<?php
					echo @$GLOBALS['error']; ?> 
			</div>
		</div>

		<script src="./assets/js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>

		 <!-- JS -->
		<script src="./assets/vendor/jquery/jquery.min.js"></script>
		<script src="./assets/vendor/jquery/jquery-ui.min.js"></script>
		<script src="./assets/vendor/jquery/jquery.validate.js"></script>
		<script src="js/login.js"></script>
	</body>
</html>
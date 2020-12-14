

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href=" new/images/icons/favicon.ico"/>
	<link rel="shortcut icon" href=" images/favicon.ico" type="image/x-icon" />
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" new/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" new/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" new/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" new/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" new/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" new/css/util.css">
	<link rel="stylesheet" type="text/css" href=" new/css/main.css">
<!--===============================================================================================-->
<style>
	p {text-align: center;}
</style>
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src=" new/images/img-01.png" alt="IMG">
				</div>

			<form id="login-form" method="post" action="authen_login.php" >
					<span class="login100-form-title">
						Student Login

					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="user_id" placeholder="username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="user_pass" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="dh">
							Login
						</button>

					</div>
					<br>
						<br>
						<p></p>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.html">
							Go Back
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src=" new/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src=" new/vendor/bootstrap/js/popper.js"></script>
	<script src=" new/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src=" new/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src=" new/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src=" new/js/main.js"></script>

</body>
</html>

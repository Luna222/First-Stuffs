<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="images/cake.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
<!--	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="js/script.js"></script>
	<title>Login</title>
</head>

<body>
	<div class="container-fluid" style="margin-top: 90px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<h4>Login with</h4>
						<span><i class="fa fa-facebook"></i></span>
						<span><i class="fa fa-twitter"></i></span>
						<span><i class="fa fa-google-plus"></i></span>
						<br><br>
						<h4>Or</h4>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="login.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<label for="exampleInputUsername1">Username/Email/Phone number</label>
										<input type="text" name="userNameEmailPhone" id="userNameEmailPhone" tabindex="1" class="form-control" placeholder="Username/Email/Phone number" value="" required>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" name="password" id="password1" tabindex="2" class="form-control" placeholder="Password" value="" required>
									</div>
									<div class="form-group text-center">
										<input type="checkbox" tabindex="3" class="form-check-input" name="remember" id="remember">
										<label for="remember">Remember Me</label>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!--								Register form-->
								<form id="register-form" action="register.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<label for="exampleInputUsername1">Username</label>
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" required onkeyup="validateUserName()">
										<h4 id='result' style="color: crimson"></h4>
									</div>
									
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="text" name="email" id="email" tabindex="2" class="form-control" placeholder="Email Address" value="" required onkeyup="validateEmail()">
										<h4 id='result2' style="color: crimson"></h4>
									</div>
									
									<div class="form-group">
										<label for="exampleInputPassword1">Password</label>
										<input type="password" name="password" id="password" tabindex="3" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<label for="exampleInputConfirmPassword1">Confirm Password</label>
										<input type="password" name="confirm-password" tabindex="4" class="form-control" placeholder="Confirm Password" required>
									</div>
									<h5 id='result' style="color: crimson"></h5>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="5" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function validateEmail() {
			var email = document.getElementById('email');
			var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var result = document.getElementById("result2");
			
			if ( email.value.match( format ) ) {
//				document.$( "#register-form" ).$( "#emal" ).val().focus();
				result.innerHTML = '';
				return true;
			} else {
				result.innerHTML = "Your email is not valid !";
				
//				$( "#email" ).val().focus();	
				return false;
			}
		}
		
		function validateUserName() {
			var username = document.getElementById('username');
			
			var format = /^[a-z0-9_-]{3,15}$/;
			var result = document.getElementById("result");
			
			if ( !(username.value.match( format )) && username.value.length < 3) {
				result.innerHTML = "Your username is not valid !";
				return false;
			} else {
				result.innerHTML = '';
				return true;
			}
		}
		
//		function validatePassword() {
//			var password = document.getElementById('password');
//			var format = /^[A-Za-z]\w{7,14}$/;
//			var result = document.getElementById("result");
//			
//			if ( email.value.match( format ) ) {
////				document.$( "#register-form" ).$( "#emal" ).val().focus();
//				return true;
//			} else {
//				result.innerHTML = "Your email is not valid :(";
//				
////				$( "#email" ).val().focus();	
//				return false;
//			}
//		}
	</script>
</body>

</html>
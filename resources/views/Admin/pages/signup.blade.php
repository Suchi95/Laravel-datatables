<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('signup/images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" href="{{asset('signup/vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/fonts/iconic/css/material-design-iconic-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('signup/css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image : url('signup/images/BG-01.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="post" action="{{URL::to('store')}}">
					{{csrf_field()}}
					<span class="login100-form-title p-b-59">
						<h2>Sign Up</h2>
					</span>

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name="email" placeholder="Email addess...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is       required" >
						
                    </div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Sign Up
							</button>
						</div>
						<a href="{{URL::to('login')}}"><h3>Sign in</h3></a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="{{asset('signup/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('signup/vendor/animsition/js/animsition.min.js')}}"></script>
	<script src="{{asset('signup/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('signup/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('signup/vendor/select2/select2.min.js')}}"></script>
	<script src="{{asset('signup/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('signup/vendor/daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('signup/vendor/countdowntime/countdowntime.js')}}"></script>
	<script src="{{asset('signup/js/main.js')}}"></script>

</body>
</html>
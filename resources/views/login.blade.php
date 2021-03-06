<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('fonts/iconic/css/material-design-iconic-font.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animate/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/Suchi.jpeg" alt="AVATAR">
					</span>
				 </form>
				<form id="Login" method="post" action="{{ URL::to('loginstore') }}" style="padding-left:20px">
		     	        @csrf
							<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter email">
								<input class="input100" type="text" name="email">
								<span class="focus-input100" data-placeholder="Email Address"></span>
							</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit"></div>
					
						<br>
	      	  	    <a href="{{URL::to('sign')}}">Havn't an account? Sign Up</a>
		         </form>
					
            </div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	

	<script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>

	<script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('vendor/select2/select2.min.js')}}"></script>

	<script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>

	<script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>

	<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<style>
		.error{
			color: red;
		}
		</style>
</head>

<body>
	<div class="container">
<div class="col-md-5" style="margin-top: 30px; margin-left: 25%">
		 

		<form method ="post"action="{{URL::to('teacher-store')}}">
			{{ csrf_field() }}

			<div class="form-group">
				<input class="form-control" value="{{ old('name') }}" name="name" type="text" placeholder="Name" >
				<span class="error">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<input class="form-control" value="{{ old('email') }}" name="email" type="text" placeholder="Email" >
				<span class="error">{{ $errors->first('email') }}</span>
			</div>
			<div class="form-group">
				<input class="form-control"value="{{ old('birth_date') }}" name="birth_date" type="text" placeholder="Birth Date" >
				<span class="error">{{ $errors->first('birth_date') }}</span>
			</div>
			<div class="form-group">
				<input class="form-control"value="{{ old('salary') }}" name="salary" type="text" placeholder="salary" >
				<span class="error">{{ $errors->first('salary') }}</span> 
			</div>
			<div class="form-group">
	           <input class="form-control" value="{{ old('password') }}" name="password" type="text" placeholder="password" >
				<span class="error">{{ $errors->first('password') }}</span> 
			</div>

			<div class="form-group">
				<input class="form-control"value="{{ old('passwordConfirmation') }}" name="password_confirmation" type="text" placeholder="confirmpassward" >
				<span class="error">{{ $errors->first('confirmpassward') }}</span> 
			</div>
			
			<div class="form-group">
				<input type="submit" value="submit"  >
			</div>
		</form>	
</div>
</div>	

</body>
</html>
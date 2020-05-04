<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
		<h2>Edit Employee</h2>
		
		<div class="container">
			<form method="post" action="{{URL :: to('update/'.$employee->id)}}"> 
			{{csrf_field()}}
    
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign up for Bootsnipp <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="{{ URL::to('/store') }}">
			    			{{csrf_field() }}
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="name"class="form-control input-sm" placeholder=" Name"
			                required value="{{$employee->name}}">

			    					</div>	
			    						</div>

				    				<div class="form-group">
			    				<input type="email" name="email" class="form-control input-sm" placeholder="Email Address"
			    				 required value="{{$employee->email}}">
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="date" name="birth_date"
			    						 required value="{{$employee->birth_date}}">
			    					</div>
			    				</div>
			    				
			    			</div>
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<input type="number" name="salary"
			    					 required value="{{$employee->salary}}">
			    					</div>
			    				</div>
			    			</div>
			    			
			    		<!--	<input type="submit" value="submit" class="btn btn-info btn-block" > -->
			    			<button class ="btn btn-primary" type="submit">Update </button>
			    			</form>
			    			
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>




	 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		


</body>
</html>
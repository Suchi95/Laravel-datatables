<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel Jquery Form Validation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
   .error{ color:red; } 
  </style>
</head>
 
<body>
 
<div class="container mt-3">
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif
   
    <form id="contact-us-form" method="post" action="{{url('save-contact')}}">
      @csrf
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
        <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>

      <div class="form-group">
        <label for="email">Email Id</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </div>  
      <!-- <div class="form-group">
        <label for="email">Birth Date</label>
        <input class="form-control" id="birth_date" type="date" placeholder="Please Enter Birth Date" >
        <span class="text-danger">{{ $errors->first('birth_date') }}</span>
      </div> -->

      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" class="form-control" id="message" placeholder="Please enter message"></textarea>
        <span class="text-danger">{{ $errors->first('message') }}</span>
      </div>

      <div class="form-group">
       <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </form>
 
</div>
<script>
   if ($("#contact-us-form").length > 0) {
    $("#contact-us-form").validate({
     
    rules: {
      name: {
        required: true,
        maxlength: 50
      },
 
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },  
      // birth_date: {
      //   required: true,
        
      // },  

      message: {
        required: true,
        minlength: 10,
        maxlength: 200,
      },    
    },
    messages: {
       
      name: {
        required: "Please enter name",
        maxlength: "Your last name maxlength should be 50 characters long."
      },

      email: {
          required: "Please enter valid email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters",
      }, 
      // birth_date: {
      //   required: "Please enter Birth Date",
        
      // },     

      message: {
          required: "Please enter message",
          minlength: "The message should be accept minimum 10 characters",
          maxlength: "The message should be accept minimum 50 characters",
      },
        
    },
    })
  }
</script>
</body>
</html>
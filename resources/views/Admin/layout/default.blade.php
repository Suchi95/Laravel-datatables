<!DOCTYPE html>
<html lang="en">
<head>
  @include('Admin.includes.head')
</head>

<body class="nav-md">
@include('Admin.includes.sidebar')
  @include('Admin.includes.header')
<div class="right_col" role="main">
   <div class="header-section">
		@yield('content')
	</div>
</div>
  
  @include('Admin.includes.footer')

</body>

</html>

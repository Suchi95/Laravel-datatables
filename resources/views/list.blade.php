<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>
<body>
	<h2>List of Employees</h2>
	<div class="table-responsive">
		</div>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>NAME</th>
				<th>EMAIL</th>
				<th>DATE of BIRTH</th>
				<th>SALARY</th>
				<th>Edit</th>
				<th>Delete</th>
			</thead>
			<tbody>
				@foreach($employees as $e)
				<tr>
					<td>{{  $e->id        }}</td>
					<td>{{  $e->name      }}</td>
					<td>{{  $e->email     }}</td>
					<td>{{  $e->birth_date}}</td>
					<td>{{  $e->salary    }}</td>
					<td><a href="{{ URL::to('edit/'.$e->id) }}">Edit</a></td>
					<td>
						<a href="{{URL::to('delete/'.$e->id) }}">Delete</a>
					
				</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		

</body>
</html>
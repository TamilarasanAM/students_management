<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Create</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.required{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container" style="margin-top: 15px;">
		<div class="row"><a href="{{ route('createstudent') }}"><button type="button" class="btn btn-primary">Create Student</button></a></div>
		<h4>View Students</h4>
		@if(Session::has('success'))
			<div class="alert alert-success">
			{{ Session::get('success') }} </div>
		@endif

		@if(count($records) > 0)
			<table class="table">
				<thead>
				    <tr>
				      	<th scope="col">#</th>
				      	<th scope="col">fullname</th>
				      	<th scope="col">rollnumber</th>
				      	<th scope="col">email</th>
				      	<th scope="col">class</th>
				      	<th scope="col">department</th>
				      	<th scope="col">dob</th>
				      	<th scope="col">gender</th>
				      	<th scope="col">address</th>
				      	<th scope="col">state</th>
				      	<th scope="col">parentname</th>
	                    <th scope="col">parentmobile</th>
	                    <th scope="col">edit</th>
	                    <th scope="col">delete</th>

				    </tr>
				</thead>
				<tbody>
					<?php $i = 0; ?>
					@foreach($records as $value)
					    <tr>
					    	<th scope="row">{{ ++$i }}</th>
					      	<td>{{ $value->fullname }}</td>
					      	<td>{{ $value->rollnumber }}</td>
					      	<td>{{ $value->emanil }}</td>
					      	<td>{{ $value->class }}</td>
					      	<td>{{ $value->department }}</td>
					      	<td>{{ $value->dob }}</td>
					      	<td>{{ $value->gendsr }}</td>
					      	<td>{{ $value->address }}</td>
					      	<td>{{ $value->state }}</td>
					      	<td>{{ $value->parentname }}</td>
					      	<td>{{ $value->parentmobile }}</td>
					      	<td> <a href="{{ route('editstudent', $value->id)}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
					      	<td><a href="{{ route('deletestudent', $value->id)}}"><button type="button" class="btn btn-primary">Delete</button></a></td>
					    </tr>
				    @endforeach
				</tbody>
			</table>
		@else
			<div class="alert alert-danger">No records available</div>
		@endif
	</div>
</body>
</html>
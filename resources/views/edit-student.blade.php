<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" name="_token" value="{{ csrf_token() }}">
	<title>Student Edit</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style type="text/css">
		.required{
			color: red;
		}
	</style>
</head>
<body>
	<div class="container" style="margin-top: 15px;">
		<div class="row"><a href="{{ route('viewstudent') }}"><button type="button" class="btn btn-primary">View Students</button></a></div>
		<h4>Edit Student</h4>
		@if(Session::has('success'))
			<div class="alert alert-success">
			{{ Session::get('success') }} </div>
		@endif
		<form action="{{ route('updatestudent')}}" method="POST" id="updatestudent">
			<input type="hidden" name="editid" value="{{ $record->id }}">
			{{ csrf_field() }}
			<div class="form-group col-md-6">
			    <label for="fullname">Full Name</label>
			    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Full Name" value="{{ old('fullname', $record->fullname) }}">
			    @if($errors->has('fullname'))
				  <div style="color: red;">{{ $errors->first('fullname') }}</div>
				@endif
			    <!-- <div class="required">Please enter your name</div> -->
			</div>

			<div class="form-group col-md-6">
			    <label for="rollnumber">Roll Number</label>
			    <input type="text" name="rollnumber" class="form-control" id="rollnumber" placeholder="Roll Number" value="{{ old('rollnumber', $record->rollnumber) }}">
			     @if($errors->has('rollnumber'))
				  <div style="color: red;">{{ $errors->first('rollnumber') }}</div>
				@endif
			</div>

			<div class="form-group col-md-6">
			    <label for="email">Email</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email', $record->email)}}">
			     @if($errors->has('email'))
				  <div style="color: red;">{{ $errors->first('email') }}</div>
				@endif
			</div>

			<div class="form-group col-md-6">
			    <label for="class">Class</label>
			    <input type="text" name="class" class="form-control" id="class" placeholder="Class" value="{{ old('class', $record->class) }}">
			     @if($errors->has('class'))
				  <div style="color: red;">{{ $errors->first('class') }}</div>
				@endif
			</div>

			<div class="form-group col-md-6">
			    <label for="department">Department</label>
			    <input type="text" name="department" class="form-control" id="department" placeholder="Department" value="{{ old('department', $record->department) }}">
			     @if($errors->has('department'))
				  <div style="color: red;">{{ $errors->first('department') }}</div>
				@endif
			</div>

			<div class="form-group col-md-6">
			    <label for="dob">Date Of Birth</label>
			    <input type="date" name="dob" class="form-control" id="dob" placeholder="Date Of Birth" value="{{ old('dob', $record->dob)}}">
			     @if($errors->has('dob'))
				  <div style="color: red;">{{ $errors->first('dob') }}</div>
				@endif
			</div>

			

			<div class="form-group col-md-6">
			    <label for="parentname">Father or Mother Name</label>
			    <input type="text" name="parentname" class="form-control" id="parentname" placeholder="Father/Mother Name" value="{{ old('parentname', $record->parentname) }}">
			     @if($errors->has('parentname'))
				  <div style="color: red;">{{ $errors->first('parentname') }}</div>
				@endif
			</div>

			<div class="form-group col-md-6">
			    <label for="parentmobile">Father/Mother Mobile</label>
			    <input type="text" name="parentmobile" class="form-control" id="parentmobile" placeholder="Father/Mother Mobile" value="{{ old('parentmobile', $record->parentmobile )}}">
			     @if($errors->has('parentmobile'))
				  <div style="color: red;">{{ $errors->first('parentmobile') }}</div>
				@endif
			</div>

			<div class="form-group col-md-6">
			    <label for="gender">Gender</label>
			    <input type="radio" name="gender" value="Male" @if(old('gender', $record->gender) == 'Male') checked @endif>&nbsp;Male
			    <input type="radio" name="gender" value="Female" @if(old('gender', $record->gender) == 'Female') checked @endif>&nbsp;Female
			     @if($errors->has('gender'))
				  <div style="color: red;">{{ $errors->first('gender') }}</div>
				@endif
			</div>
			

			<div class="form-group col-md-6">
			    <label for="state">State</label>
			    <select class="form-control" id="state" name="state">
			    	<option value="">Select Your State</option>
			    	<option value="Tamilnadu"  @if(old('state', $record->state) == 'Tamilnadu') selected @endif>Tamilnadu</option>
			    	<option value="Kerala"  @if(old('state', $record->state) == 'Kerala') selected @endif>Kerala</option>
			    	<option value="Karnataka"  @if(old('state', $record->state) == 'Karnataka') selected @endif>Karnataka</option>
			    	<option value="AndhraPradesh"  @if(old('state', $record->state) == 'AndhraPradesh') selected @endif>Andhra Pradesh</option>
			    	<option value="Telangana"  @if(old('state', $record->state) == 'Telangana') selected @endif>Telangana</option>
			    </select>
			</div>

			<div class="form-group col-md-12">
			    <label for="address">Address</label>
			    <textarea class="form-control" name="address" placeholder="Enter Address" id="address">{{ old('address', $record->address) }}</textarea>
			</div>

			
			<div class="form-group col-md-12">
			    <button type="button" id="editstudent" class="btn btn-primary">Submit</button>
			</div>

			
			
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript">
		$(document).on('click','#editstudent', function(){
            var d = $('#updatestudent').serialize();
            $.ajax({
                url: '{!! route("updatestudent") !!}',
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content'), },
                data: d,
                dataType: 'json',
                type: 'POST',
                success: function(res){
                    if(res.status == 'success') {
                        Swal.fire(res.msg);
                        $('#updatestudent')[0].reset();
                    }else{
                        Swal.fire(res.msg);
                    }
                    return false;
                }, error: function(e){
                    t.text('Update');
                    return false;
                }
            });
        });
	</script>
</body>
</html>
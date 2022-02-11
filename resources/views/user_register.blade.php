@extends('nav2')

@section('content')
<div class="container">
	<div class="card mt-4 mb-4">
		<div class="card-header pques">
			<center><h4>User Register</h4></center>
		</div>
		<form method="post" action="{{ url('/create-user') }}" class="basicform" enctype="multipart/form-data">
     		@csrf 
		<div class="card-body">
			<div class="row">
			    <div class="form-group col-md-6">
			      	<label for="name">Name</label><span class="required" style="color: red;">*</span>
			      	<input type="text" class="form-control" id="inputEmail4" name="name" placeholder="Enter Your Name" required="enter name">
			    </div>
			    <div class="form-group col-md-6">
				    <div>
				        <label for="gender">Gender</label><span class="required" style="color: red;">*</span>
				    </div>
				    <div class="form-group d-flex"> 
				        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
				          	<input type="radio" id="customRadioInline1" name="sex" class="custom-control-input" value="Male">
				          	<label class="custom-control-label" for="customRadioInline1">Male</label>
				        </div>
				        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
				         	<input type="radio" id="customRadioInline2" name="sex" class="custom-control-input" value="Female">
				         	<label class="custom-control-label" for="customRadioInline2">Female</label>
				        </div>
				        <div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
				         	<input type="radio" id="customRadioInline3" name="sex" class="custom-control-input" value="Other">
				          	<label class="custom-control-label" for="customRadioInline3">Other</label>
				      	</div>
				    </div>
			    </div>
  			</div>
  			<div class="row">
			    <div class="form-group col-md-6">
			      	<label for="DOB">Date Of Birth</label><span class="required" style="color: red;">*</span>
			      	<input type="date" class="form-control" name="dob" placeholder="dd/mm/yyyy" required>
			    </div>

			    <div class="form-group col-md-6">
					  		<div>
					  			<label for="gender">Marital Status</label><span class="required" style="color: red;">*</span>
					  		</div>
					  		<div class="form-control d-flex">
						  		<div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
						  			<input type="radio" id="unmarried" name="marital_status" class="custom-control-input" value="Unmarried">
						  			<label class="custom-control-label" for="unmarried">Unmarried</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
						  			<input type="radio" id="married" name="marital_status" class="custom-control-input" value="Married">
						  			<label class="custom-control-label" for="married">Married</label>
								</div>
								<div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
						  			<input type="radio" id="Divorced" name="marital_status" class="custom-control-input" value="Divorced">
						  			<label class="custom-control-label" for="Divorced">Divorced</label>
								</div>
							</div>
					  	</div>
						</div>
				<div class="row">
				  		
				  		<div class="form-group col-md-6">
				      		<label for=" Address"> Address</label><span class="required" style="color: red;">*</span>
				      		<textarea type="text" class="form-control" name="address" required></textarea>
			    		</div>
				  		<div class="form-group col-md-3">
					      	<label for="city">City</label><span class="required" style="color: red;">*</span>
					      	<input type="text" class="form-control" name="city" placeholder="City Name" required>
					    </div>
					    <div class="form-group col-md-3">
					      	<label for="inputZip">Pin code</label><span class="required" style="color: red;">*</span>
					      	<input type="text" class="form-control" name="pin" id="inputZip" placeholder="Pin code" required>
					    </div>
				</div>
				<div class="row">
					  	<div class="form-group col-md-6">
					  		<label for="weight">Weight in Kg</label><span class="required" style="color: red;">*</span>
							<input type="number" class="form-control" placeholder="Weight in Kg" name="wik" required>
					  	</div>
				  		<div class="form-group col-md-6"><label for="height">Height in Cm</label><span class="required" style="color: red;">*</span>
							<input type="number" class="form-control" placeholder="Height in Cm" name="hic" required>
						</div>

				  	</div>
			<div class="row">
			    <div class="form-group col-md-6">
					<label for="Mobile No">State</label><span class="required" style="color: red;">*</span>
					<input type="text" class="form-control" name="state" placeholder="State" required>
				</div>
				<div class="form-group col-md-6">
					      	<label for="Mobile No">Mobile No</label><span class="required" style="color: red;">*</span>
					      	<input type="number" class="form-control" name="mobile_no" placeholder="Mobile No" required>
				</div>
			</div>
  			<div class="row">
  				<div class="form-group col-md-6">
			      	<label for="email">Email</label>
			      	<input type="email" class="form-control" name="email" placeholder="Email Id" required>
			    </div>
			    <div class="form-group col-md-6">
			      	<label for="Password">Password</label><span class="required" style="color: red;">*</span>
			      	<input type="password" class="form-control" name="password"  placeholder="Password" required>
			    </div>
  			</div>
  			<div class="row">
  				<div class="form-group col-md-6">
      				<label for="reference">Reference By </label><span class="required" style="color: red;">*</span>
      				@foreach($sponser_id as $sponser)
      				<div class="row">
				        <div class="form-group col-md-6">
				          	<input type="text" class="form-control" name="ref_name" value="{{$sponser->name}}" readonly>
				        </div>
				        <div class="form-group col-md-6">
				          	<input type="text" class="form-control" name="vens_id" value="{{$sponser->vens_id}}" hidden="">
				        </div>
				        <div class="form-group col-md-6">
				          	<input type="text" class="form-control" name="id" value="{{$sponser->id}}" hidden="">
				        </div>
				        <div class="form-group col-md-6">
				         	<input type="text" class="form-control" name="ref_id" value="{{$sponser->ref_id}}"  hidden="">
				        </div>
				        <div class="form-group col-md-6">
				         	<input type="text" class="form-control" name="ref_id1" value="{{$sponser->ref_id1}}" hidden="">
				        </div>
				        <div class="form-group col-md-6">
				         	<input type="text" class="form-control" name="ref_id2" value="{{$sponser->ref_id2}}" hidden="">
				        </div>
				        <div class="form-group col-md-6">
				          	<input type="text" class="form-control" name="ref_id3" value="{{$sponser->ref_id3}}" hidden="">
				        </div>
				        <div class="form-group col-md-6">
				         	<input type="text" class="form-control" name="ref_id4" value="{{$sponser->ref_id4}}" hidden="">
				        </div>
      				</div>
      				@endforeach
    			</div>
			    <div class="form-group col-md-6">
				    <label for="religion">Religion</label><span class="required" style="color: red;">*</span>
				    <input type="text" class="form-control" id="religion" name="religion" placeholder="Religion" required>
				</div>
 			</div>
 			<div class="form-group mb-4 mt-4">
    			<center><button type="submit" class="btn btn-info" style="width:200px;">Submit</button></center>
  			</div>
		</div>
		</form>
	</div>

</div>

@endsection
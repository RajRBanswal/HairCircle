@extends('nav2')

@section('content')
<div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-header abc">
			<center><h4>EMPLOYEE REGISTRATION</h4></center>
		</div>
		<div class="card-body">
			<form method="post" action="{{ url('/e_register') }}" class="basicform" enctype="multipart/form-data">
     		@csrf
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
						  		<input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="Male">
						  		<label class="custom-control-label" for="customRadioInline1">Male</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
							  	<input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="Female">
							  	<label class="custom-control-label" for="customRadioInline2">Female</label>
							</div>
							<div class="custom-control custom-radio custom-control-inline col-md-4 col-4">
							  	<input type="radio" id="customRadioInline3" name="gender" class="custom-control-input" value="Other">
							  	<label class="custom-control-label" for="customRadioInline3">Other</label>
							</div>
						</div>
  					</div>
  				</div>
  				<div class="row">
				    <div class="form-group col-md-6">
				      	<label for="Mobile No">Mobile No</label><span class="required" style="color: red;">*</span>
				      	<input type="number" class="form-control" name="mobile_no" placeholder="Mobile No" required>
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="email">Email</label>
				      	<input type="email" class="form-control" name="email" placeholder="Email Id" required>
				    </div>
  				</div>
  				<div class="row">
				    <div class="form-group col-md-6">
				      	<label for="Address">Address</label><span class="required" style="color: red;">*</span>
				      	<textarea type="text" class="form-control" name="address" required></textarea>
				    </div>
				   	<div class="form-group col-md-6"> 
				   		<div class="row">
				      		<div class="form-group col-md-6">
				      			<label for="city" >City</label><span class="required" style="color: red;">*</span>
				      			<input type="text" class="form-control" name="city" placeholder="City Name" required>
				    		</div>
				    		<div class="form-group col-md-6">
				      			<label for="inputZip">Pin code</label>
				      			<input type="text" class="form-control" name="pin" id="inputZip" placeholder="Pin code" required="Enter PIN">
				    		</div>
				   		</div>  
				    </div>
  				</div>
  				<div class="row">
				    <div class="form-group col-md-6">
				      	<label for="Password">Password</label><span class="required" style="color: red;">*</span>
				     	 <input type="password" class="form-control" name="password"  placeholder="Password" required>
				    </div>
				    <div class="form-group col-md-6"><span class="required" style="color: red;">*</span>
				      	<label for="uid">Aadhar Card</label>
				      	<input type="text" class="form-control" name="uid" placeholder="PAN Card / Aadhar Card" required>
				    </div>
  				</div>
  				<div class="row">
				    <div class="form-group col-md-6">
				      	<label for="aadhar">Aadhar Card</label><span class="required" style="color: red;">*</span>
				     	 <input type="file" class="form-control" name="aadhar"  required>
				    </div>
				    <div class="form-group col-md-6"><span class="required" style="color: red;">*</span>
				      	<label for="pan">PAN Card</label>
				      	<input type="file" class="form-control" name="pan" required>
				    </div>
  				</div>
  				<div class="row">
  					<div class="form-group col-md-6"><span class="required" style="color: red;">*</span>
				      	<label for="passbook">Passbook </label>
				      	<input type="file" class="form-control" name="passbook" required>
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="profile_i">Profile Image </label>
				      	<input type="file" class="form-control" name="profile_i" required>
				    </div>
  				</div>
  				<div class="row">
  					<div class="form-group mt-4">
   						<center><button type="submit" class="btn btn-primary" >Submit</button></center>
 					</div>
  				</div>

     		</form>
		</div>
	</div>
</div>
<style>
	.abc{
		background-color: #DAA520;
		color: #fff;
	}
</style>

@endsection
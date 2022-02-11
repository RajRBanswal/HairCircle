@extends('nav2')

@section('content')
<div class="container mt-5 mb-5">
	<div class="card">
		<div class="card-header abc">
			<center><h4>PROFILEs</h4></center>
		</div>
		<div class="card-body">
			<div class="row">
		        <div class="form-group col-md-6 d-flex">
		        	<div class="form-group col-md-3 col-5">
		    	    	<label>Name </label>
			        </div>
			        <div class="form-group col-md-1 col-1">
			    	    <label> : </label>
			        </div>
			        <div class="form-group col-md-8 col-6">
			    	    <label>{{$check->name}}</label>
			        </div>
		        </div>
		        <div class="form-group col-md-6 d-flex">
		        	<div class="form-group col-md-3 col-5">
		    	    	<label>Gender </label>
			        </div>
			        <div class="form-group col-md-1 col-1">
			    	    <label> : </label>
			        </div>
			        <div class="form-group col-md-8 col-6">
			    	    <label>{{ $check->gender}}</label>
			        </div>
		        </div>
		        <div class="row mt-2">
			        <div class="form-group col-md-6 d-flex">
			        	<div class="form-group col-md-3 col-5">
			    	    	<label>Mobile No. </label>
				        </div>
				        <div class="form-group col-md-1 col-1">
				    	    <label> : </label>
				        </div>
				        <div class="form-group col-md-8 col-6">
				    	    <label>{{$check->mobile_no}}</label>
				        </div>
			        </div>
			        <div class="form-group col-md-6 d-flex">
			        	<div class="form-group col-md-3 col-5">
			    	    	<label>Email </label>
				        </div>
				        <div class="form-group col-md-1 col-1">
				    	    <label> : </label>
				        </div>
				        <div class="form-group col-md-8 col-6">
				    	    <label>{{ $check->email}}</label>
				        </div>
			        </div>
		    	</div>
		    	<div class="row mt-2">
			        <div class="form-group col-md-6 d-flex">
			        	<div class="form-group col-md-3 col-5">
			    	    	<label>Address </label>
				        </div>
				        <div class="form-group col-md-1 col-1">
				    	    <label> : </label>
				        </div>
				        <div class="form-group col-md-8 col-6">
				    	    <label>{{ $check->address }},{{$check->city }},{{ $check->pincode}}</label>
				        </div>
			        </div>
			        
		    	</div>
		    	<div class="row mt-2">
		    		<div class="form-group col-md-4 col-12 d-flex">
			        	<div class="form-group col-md-6 col-8">
			    	    	<label>Sponsor Link </label>
				        </div>
				        <div class="form-group col-md-4 col-4">
				    	    <label> : </label>
				        </div>
                    </div>
                    <div class="form-group col-md-12 col-12">
                      		<label><a href="">{{url('sponsor_link',$check->id.'/'.$check->patients_id)}}</a></label>
                  	</div>
                </div>
                <div class="row">
                	<div class="form-group col-md-8 col-12 mt-2">
                        <a href="whatsapp://send?text={{url('sponsor_link',$check->id.'/'.$check->patients_id)}}" class="btn btn-primary" data-action="share/whatsapp/share" target="_blank"><i class="bi bi-whatsapp">Send via Whatsapp</i></a> 
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{url('sponsor_link',$check->id.'/'.$check->patients_id)}}" target="_blank" class="btn btn-primary"><i class="bi bi-facebook">Share on Facebook</i>  </a>
                    </div>
                </div>

                 </div>
                 <div class="container">
                 	<div class="row mt-3">
	                    <div class="form-group">
	                      	<h4>Dacuments</h4>
	                      	<div class="row d-flex mt-3">
	                      		<div class="form-group col-md-3 col-12 rrb">
	                      			<a href="docs/{{$check->aadhar}}"><img src="docs/{{$check->aadhar}}" width="100%">
	                      				<center><h6>Aadhar</label></h6>
	                      			</a>
	                      		</div>
	                      		<div class="form-group col-md-3 col-12 rrb">
	                      			<a href="docs/{{$check->pan}}"><img src="docs/{{$check->pan}}" width="100%">
	                      				<center><h6>Pan Card</h6></center>
	                      			</a>
	                      		</div>
	                      		<div class="form-group col-md-3 col-12 rrb">
	                      			<a href="docs/{{$check->passbook}}"><img src="docs/{{$check->passbook}}" width="100%">
	                      				<center><h6>Bank Passbook</h6></center>
	                      			</a>
	                      		</div> 
	                      	</div>
	                    </div>
                 	</div> 
                 </div>
		    </div>
		</div>
	</div>
</div>
<style>
	.abc{
		background-color: #106eea;
		color: #fff;
	}
	.rrb{
		padding: 10px;
		border: solid 1px;
		margin: 5px;
	}
</style>

@endsection
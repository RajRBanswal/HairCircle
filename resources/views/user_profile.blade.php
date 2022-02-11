@extends('navbar')

@section('content')

	<div class="container">
		<div class="card mt-4 mb-4">
			<div class="card-header pques">
				<center><h3>User Profile</h3></center>
			</div>
			<div class="card-body">
				@foreach($users as $user)
				<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Name :-</label>
					</div>
					<div class="form-group col-md-6">
						<label class="text">{{$user->name}}</label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Sex :-</label>
					</div>
					<div class="form-group col-md-6">
						<label class="text">{{$user->sex}}</label>
					</div>
				</div>
					<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Reference By :-</label>
					</div>
					<div class="form-group col-md-6">
						<label class="text">{{$user->ref_name}}</label>
					</div>
				</div>
					<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Mobile :-</label>
					</div>
					<div class="form-group col-md-6">
						<label class="text">{{$user->mobile_no}}</label>
					</div>
				</div>
					<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Email :-</label>
					</div>
					<div class="form-group col-md-6">
						<label class="text">{{$user->email}}</label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Address  :-</label>
					</div>
						
					<div class="form-group col-md-6">
						<label class="text">{{$user->address}}</label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Product Name  :-</label>
					</div>
						
					<div class="form-group col-md-4">
						<label class="text">{{$user->product_name}}</label>
					</div>
					<div class="form-group col-md-4">
						<label>{{$user->image}}</label>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Sponser-Link  :-</label>
					</div>
				@if($user->ref_id && $user->ref_id1)
							
					<div class="form-group col-md-6">
						<a href="whatsapp://send?text={{url('sponsor_link',$user->ref_id.'/'.$user->ref_id1.'/'.$user->id)}}" class="anchor">{{url('sponsor_link',$user->ref_id.'/'.$user->ref_id1.'/'.$user->id)}}</a>
					</div>
					@else
					<div class="form-group col-md-6">
						<a href="whatsapp://send?text={{url('sponsor_link',$user->ref_id.'/'.$user->id)}}" class="anchor">{{url('sponsor_link',$user->ref_id.'/'.$user->id)}}</a>
					</div>
					@endif
				</div>
				@endforeach
			
				<div class="row">
					<div class="form-group col-md-4">
						<label class="label">Join Customers  :-</label>
					</div>
					<div class="body genealogy-body genealogy-scroll">
        				<div class="genealogy-tree">
            				<ul>
            				@foreach($usr as $root)
                				<li style="list-style: none;">
                       				<a href="javascript:void(0);">
                       				     <div class="member-view-box">
                       				         <div class="member-image">
                       				             <div class="member-details">
                       				                 <label class="label">{{ $root->name }}</label>
                       				                 <label class="label">Id: {{ $root->id }}</label>
                       				             </div>
                       				         </div>
                       				     </div>
                       				 </a>
                				</li>

							@endforeach
							</ul>
						</div>
					</div>	
				</div>
			</div>			
		</div>
	</div>
@endsection
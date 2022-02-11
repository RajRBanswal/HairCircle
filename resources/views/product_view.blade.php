@extends('navbar')

@section('content')
<div class="container">
	<div class="card mt-4 mb-4">
		<div class="card-header pques">
			<center><h4>Product</h4></center>
		</div>
		<div class="card_body mb-4">
			<div class="container">
				<div class="row">
					<div class="form-group col-md-4 col-6">
						<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
							@csrf
							<div class="card mt-4">
								<div class="img-box">
									<center><a href="{{url('/product-description')}}">	<img src="https://5.imimg.com/data5/OU/DC/VV/SELLER-74737604/tresemme-keratin-smooth-shampoo-185ml-500x500.jpg" name="image" class="img-fluid" alt=""></a></center>
								</div>
									<div class="thumb-content">
										<center><div class="form-group">
											<h4>KIT-1<input type="text" name="name" value="KIT-1" hidden=""></h4>
											<p class="item-price"><strike>&#x20B9;400.00</strike> <span>&#x20B9;350.00<input type="text" name="price" value="350.00" hidden=""></span></p>
										</div></center>
										<div class="row mb-4">
											<div class="form-group col-md-4">
											</div>
											<div class="form-group col-md-8">
												<button type="submit" class="btn btn-danger text">Buy Now</button>
											</div>
										</div>	
									</div>													
								</div>
							</form>
						</div>
						<div class="form-group col-md-4 col-6">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
							@csrf
					
							<div class="card mt-4">
								<div class="img-box">
									<center><img src="https://www.tresemme.com/content/dam/unilever/tresemme/global/pack_shot/front/hair_care/wash_and_care/tresemme_shampoo_colour_revitalise_100ml/ps-personal_care-hair-tresemme-colour_revitalise-100ml-uk_ie_no_de_se_fi-9231161-916187-png.png" class="img-fluid" name="image" alt=""></center>
								</div>
									<div class="thumb-content">
										<center><div class="form-group">
											<h4>KIT-2<input type="text" name="name" value="KIT-2" hidden=""></h4>
											<p class="item-price"><strike>&#x20B9;600.00</strike> <span>&#x20B9;600.00<input type="text" name="price" value="600.00" hidden=""></span></p>
										</div></center>
										<div class="row mb-4">
											<div class="form-group col-md-4">
											</div>
											<div class="form-group col-md-8">
												<button type="submit" class="btn btn-danger text">Buy Now</button>
											</div>
										</div>	
									</div>													
								</div>
							</form>
						</div>
						<div class="form-group col-md-4 col-6">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
							@csrf
					
							<div class="card mt-4">
								<div class="img-box">
									<center><img src="https://www.bigbasket.com/media/uploads/p/l/40158271-2_3-tresemme-hair-fall-defense-shampoo.jpg" class="img-fluid" name="image" alt=""></center>
								</div>
									<div class="thumb-content">
										<center><div class="form-group">
											<h4>KIT-1C<input type="text" name="name" value="KIT-1C" hidden=""></h4>
											<p class="item-price"><strike>&#x20B9;600.00</strike> <span>&#x20B9;500.00<input type="text" name="price" value="500.00" hidden=""></span></p>
										</div></center>
										<div class="row mb-4">
											<div class="form-group col-md-4">
											</div>
											<div class="form-group col-md-8">
												<button type="submit" class="btn btn-danger text">Buy Now</button>
											</div>
										</div>	
									</div>													
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>

@endsection
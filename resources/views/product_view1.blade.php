<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Hair Transplant</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body >
@include('navbar')

<div class="container mt-5">
     <div class="text-center pt-3">
      <h2 >YOUR PRODUCTS LIST</h2>
      </div> 

     <div class="row">  
		<div class="col-md-12" >
					<div class="row">

  
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper center">
							
							<div class="img-box">
								<center><a href="{{url('/product-description')}}">	<img src="https://5.imimg.com/data5/OU/DC/VV/SELLER-74737604/tresemme-keratin-smooth-shampoo-185ml-500x500.jpg" name="image" class="img-fluid" alt=""></a></center>
								<!-- <input type="text" name="image" value="https://5.imimg.com/data5/OU/DC/VV/SELLER-74737604/tresemme-keratin-smooth-shampoo-185ml-500x500.jpg"> -->
								</div>
								<div class="thumb-content">
									<h4>Shampoo<input type="text" name="name" value="Shampoo" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;400.00</strike> <span>&#x20B9;369.00<input type="text" name="price" value="369.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div> 
									<div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
									
								</div>													
							</div>
							</form>
						</div>



						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://media1.popsugar-assets.com/files/thumbor/44c4HvEgk8HnF9AMGvScleVe_Ag/fit-in/728xorig/filters:format_auto-!!-:strip_icc-!!-/2018/01/05/788/n/1922153/3966541e5a4fbc2e3ffd01.26572541_edit_img_cover_file_44472878_1515081282/i/Best-New-Hair-Products-2018.jpg" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Hair & Care<input type="text" name="name" value="Hair & Care" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;25.00</strike> <span>&#x20B9;23.99<input type="text" name="price" value="23.99" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>		
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tresemme.com/content/dam/unilever/tresemme/global/pack_shot/front/hair_care/wash_and_care/tresemme_shampoo_colour_revitalise_100ml/ps-personal_care-hair-tresemme-colour_revitalise-100ml-uk_ie_no_de_se_fi-9231161-916187-png.png" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Moisture Rich <input type="text" name="name" value="Moisture Rich" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;899.00</strike> <span>&#x20B9;649.00 <input type="text" name="price" value="649.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>								
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.bigbasket.com/media/uploads/p/l/40158271-2_3-tresemme-hair-fall-defense-shampoo.jpg" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Hair Fall Defense <input type="text" name="name" value="Hair Fall Defense" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;315.00</strike> <span>&#x20B9;250.00 <input type="text" name="price" value="250.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
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
			<!-- 	</div> -->

	<!-- 			<div class="carousel-item"> -->
					<div class="row">
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
                                 <img src="https://www.tresemme.com/content/dam/unilever/tresemme/global/pack_shot/front/hair_care/wash_and_care/tresemme_shampoo_colour_revitalise_100ml/ps-personal_care-hair-tresemme-colour_revitalise-100ml-uk_ie_no_de_se_fi-9231161-916187-png.png" class="img-fluid" name="image" alt="">

								</div>
								<div class="thumb-content">
									<h4>Hair & Care <input type="text" name="name" value="Hair & Care" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;289.00</strike> <span>&#x20B9;269.00 <input type="text" name="price" value="269.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://imagesvc.meredithcorp.io/v3/mm/image?q=85&c=sc&poi=face&w=1500&h=1500&url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F23%2F2020%2F03%2F03%2Fbiolage-volumebloom-conditioner-weightless-moisture-long-lasting-voluminous-hair.jpg" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Shampoo <input type="text" name="name" value="Shampoo" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;1099.00</strike> <span>&#x20B9;869.00 <input type="text" name="price" value="869.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									 <div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
						    			<img src="https://d3r2zleywq7959.cloudfront.net/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/5/5/55460_xlarge.jpg" name="image" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Moistures <input type="text" name="name" value="Moistures" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;109.00</strike> <span>&#x20B9;99.00 <input type="text" name="price" value="99.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.londondrugs.com/on/demandware.static/-/Sites-londondrugs-master/default/dwd567ebb9/products/L0656840/large/L0656840.JPG" name="image" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dove Shampoo <input type="text" name="name" value="Dove Shampoo" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;599.00</strike> <span>&#x20B9;569.00 <input type="text" name="price" value="569.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								<div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
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
				<!-- </div> -->
			<!-- 	<div class="carousel-item"> -->
					<div class="row">
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.dove.com/content/dam/unilever/dove/united_kingdom/pack_shot/8710447337684-2290866-png.png" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Dove <input type="text" name="name" value="Dove" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;369.00</strike> <span>&#x20B9;349.00 <input type="text" name="price" value="349.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://media.glamour.com/photos/5c128f83bc6b5a2ccac7a13a/1:1/w_1600,h_1600,c_limit/volumetry-1600.jpg" name="image" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Loreal <input type="text" name="name" value="Loreal" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;315.00</strike> <span>&#x20B9;250.00 <input type="text" name="price" value="250.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>
						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://www.tresemme.com/content/dam/unilever/tresemme/canada/pack_shot/022400002194-2319643-png.png" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Flaweless Curls <input type="text" name="name" value="Flaweless Curls" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;450.00</strike> <span>&#x20B9;418.00 <input type="text" name="price" value="418.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
                						<div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
										</div>
										<div class="form-group col-md-8">
											<button type="submit" class="btn btn-danger text">Buy Now</button>
										</div>
									</div>
								</div>						
							</div>
						</form>
						</div>	

						<div class="col-md-3">
							<form method="post" action="{{url('/buy-product')}}" enctype="multipart/form-data">
								@csrf
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="https://images-na.ssl-images-amazon.com/images/I/41umQUlFzfL.jpg" class="img-fluid" name="image" alt="">
								</div>
								<div class="thumb-content">
									<h4>Keratin Smooth <input type="text" name="name" value="Keratin Smooth" hidden=""></h4>
									<p class="item-price"><strike>&#x20B9;350.00</strike> <span>&#x20B9;330.00 <input type="text" name="price" value="330.00" hidden=""></span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									 <div class="row">
										<div class="form-group col-md-4">
											<a href="#" class="btn btn-warning text"><i class="fas fa-cart-plus"></i></a>
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
				<!-- </div> -->

			 </div>
			 <!-- Carousel controls  -->
		<!-- 	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a> -->
		</div>



<!--    <a href="{{url('/product')}}"> <button type="button"  class="btn btn-outline-primary mb-3 float-right">Show More</button></a> -->

		 </div>
    
	</div > 
	<!-- container -->
</div>
<style type="text/css">
	.text{
		font-size: 10px;
	}
	.btn-warning{
		background-color: yellow;
		width: 100%;
	}
	.btn-danger{
		background-color: #FF1493;
		width: 100%;
		font-weight: bold;
		color: white;
	}
</style>
</body>
</html>



